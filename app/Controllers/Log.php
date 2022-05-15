<?php
namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\LoginModel;
class Log extends BaseController
{
	public $loginModel;
  public $session;
	public function __construct(){
		helper('form');
		$this->loginModel=new LoginModel();
    $this->session=session();
	}


    public function index()
    {
    $data=[];

    //site login
if($this->request->getMethod()=='post')
          {
$rules=[
'email'=>'required|valid_email',
'password'=>'required|min_length[6]|max_length[16]',
       ];

if($this->validate($rules))
                 {
$email=$this->request->getVar('email');
$password=$this->request->getVar('password');




$throttler=\Config\Services::throttler();
$allow=$throttler->check("log",4,MINUTE);


if($allow){



$userdata=$this->loginModel->verifyEmail($email);
              if($userdata)
                        {
if(password_verify($password,$userdata['password']))
                                  {

if($userdata['status']=='active'){

$loginInfo=[

  'uni_id'=>$userdata['uni_id'],
  'agent' =>$this->getUserAgentInfo(),
  'ip'=>$this->request->getIPAddress(),
  'login_time'=>date('Y-m-d h:i:s'),


];
$la_id=$this->loginModel->saveLoginInfo($loginInfo);
if($la_id)
{
  $this->session->set('logged_info',$la_id);
}


  $this->session->set('logged_user',$userdata['uni_id']);
  return redirect()->to(base_url().'/dashboard');

}else{

  $data['error']='Please activate your account.contact admin'; 
  //$this->session->setTempdata('error','Please activate your account.contact admin',3);
//return redirect()->to(current_url()); 

}

                                  }
                                  else
                                  {

  $data['error']='Sorry Wrong password entered.'; 
                                   //$this->session->setTempdata('error','Sorry! wrong password entered for that eail',3);
//return redirect()->to(current_url()); 
                                  }



                        }
              else
  
                    {
    $data['error']='Sorry Email does not exist';    
//$this->session->setTempdata('error','Sorry! email does not exist',3);
//return redirect()->to(current_url());
                        }   
}
else
{
$data['error']='Maximum number of falied login attempts.Try again after a minute.';
}


                 }
                 else
                      {
                        $data['validation']=$this->validator;
                      }


          }




    //google login
require_once APPPATH."libraries/vendor/autoload.php";
#google client object
$google_client=new \Google_Client();
$google_client->setClientId('36854596937-kp41e516i95dsjccdmhrsfcch0gbj290.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri(base_url().'/log');
$google_client->addScope('email');
$google_client->addScope('profile');

if($this->request->getVar('code'))
     {
      $token=$google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));

if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
$this->session->set('access_token',$token['access_token']);
//to get profile data
$google_service=new \Google_Service_Oauth2($google_client);
$gdata=$google_service->userinfo->get();



if($this->loginModel->google_user_exists($gdata['ID']))
                {
//update
                  $userData=[
'first_name'=>$gdata['given_name'],
'last_name'=>$gdata['family_name'],
'email'=>$gdata['email'],
'profile_pic'=>$gdata['picture'],
                  ];

$this->loginModel->updateGoogleUser($userData,$gdata['ID']);

                }
                else
                {
//insert
                  $userData=[
 'oauth_id'=>$gdata['id'],                   
'first_name'=>$gdata['given_name'],
'last_name'=>$gdata['family_name'],
'email'=>$gdata['email'],
'profile_pic'=>$gdata['picture'],
                  ];
 $this->loginModel->createGoogleUser($userData);
$this->session->set('google_user',$userData);

                  return redirect()->to(base_url()."/Dashboard");
                }



     }
     }



if(!$this->session->get('access_token'))
    {
      $data['loginButton']=$google_client->createAuthUrl();
    }
        echo view('login_view.php',$data);
    }





public function getUserAgentInfo()

{

  $agent=$this->request->getUserAgent();
if($agent->isBrowser()){
  $currentAgent = $agent->getBrowser();
}
elseif($agent->isRobot())
      {
       $currentAgent=$this->agent->robot(); 
      }
      elseif($agent->isMobile())
      {
        $currentAgent=$agent->getMobile();
      }
      else
      {
        $currentAgent='undefined User Agent';
      }
      return $currentAgent;
}


public function forgot_password()
  {
$data=[];

if($this->request->getMethod()=='post')
    {
     $rules=[
      'email'=>[
     'label'=>'Email',
     'rules'=>'required|valid_email',
     'errors'=>[
'required'=>'{field} field required',
'valid_email'=>'valid {field} required',
     ]
   ],
     ]; 

if($this->validate($rules))
       {
$email=$this->request->getVar('email',FILTER_SANITIZE_EMAIL);
 $userdata=$this->loginModel->verifyEmail($email);      
if(!empty($userdata))
  {
if($this->loginModel->updatedAt($userdata['uni_id']))
  {
$to=$email;
$subject='Reset Password Link';
$token=$userdata['uni_id'];
$message='Hi'.$userdata['username'].'<br><br>'.'Your reset password request has been received.Please click the below link to reset your password.<br><br><a href="'.base_url().'/log/reset_password/'.$token.'">Click here</a>'
.'Thanks<br>Resume Pro';


 $email=\Config\Services::email();
       $from='hirunikawms@gmail.com';            
    
       $email->setFrom($from);
       $email->setTo($to);
       $email->setSubject($subject);
       $email->setMessage($message);
      if($email->send())
                  {
  
session()->setTempdata('success','Reset password sent to your registered email.Please verify within 15 minutes',3);
return redirect()->to(current_url());

                  }

      else{

      //$data=$email->printDebugger(['headers']);
      //print_r($data);
          }

  }else
  {
    $this->session->setTempdata('error','Sorry! Unable to update.Try again',3);
return redirect()->to(current_url());
  }

  }
  else
  {
$this->session->setTempdata('error','Sorry! entered email does not exist',3);
return redirect()->to(current_url());

  }



       }
       else
       {
$data['validation']=$this->validator;
       }


    }
  echo view('forgot_password_view.php',$data);  
  }




public function reset_password($token=null)
{
 $data=[];

if(!empty($token)){
$userdata=$this->loginModel->verifyToken($token);
if(!empty($userdata))
  {  
if($this->checkExpiryDate($userdata['updated_at']))
          {
if($this->request->getMethod()=='post')
{
  $rules=[

'pwd'=>      [
             'label'=>'password',
             'rules'=>'required|min_length[6]|max_length[16]',
             ],

'cpwd'=>        [
                'label'=>'confirm password',
             'rules'=>'required|matches[pwd]',
                ],

          ];

if($this->validate($rules))
                   {
$pwd=password_hash($this->request->getVar('pwd'),PASSWORD_DEFAULT);

if($this->loginModel->updatePassword($token,$pwd))
  {
$this->session->setTempdata('success','Password updated successfully.Login now',3);
return redirect()->to(base_url().'/log');
  }
else
{
$this->session->setTempdata('error','Sorry! unable to update password .Please try again later',3);
return redirect()->to(current_url());
}


                   }
                   else
                   {
                    $data['validation']=$this->validator;
                   }






}
          }
          else
          {
            $data['error']='Reset password link was expired';
          }


  }
else
{
  $data['error']='Unable to find user account';
}




}else
{
  $data['error']='Sorry unautharized access';
}

 return view('reset_password_view',$data);
}



public function checkExpiryDate($time)
{
  $update_time=strtotime($time);
  $current_time=time();
  $timeDiff=($current_time-$update_time)/60;
if($timeDiff<900)
{
  return true;
}
else
{
  return false;
}




}





}
