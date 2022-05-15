<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DashboardModel;
class Dashboard extends BaseController
{
	public $dModel;

public function __construct()
{
$this->dModel=new DashboardModel();
helper('form');

}


    public function index()
    {
$data=[];
if(!(session()->has('logged_user') || session()->has('google_user')))
{
return redirect()->to(base_url()."/log");	
}


$uni_id=session()->get('logged_user');
$data['userdata']= $this->dModel->getLoggedInUserData($uni_id);

return view('dashboard_view',$data);
    }


public function logout()
     {
if(session()->has('logged_info'))
         {
         	$la_id=session()->get('logged_info');
         	$this->dModel->updateLogoutTime($la_id);
         }

     	session()->remove('logged_user');
     	session()->destroy();
     	return redirect()->to(base_url()."/log");
     }


public function login_activity()
   {

    $data['userdata']= $this->dModel->getLoggedInUserData(session()->get('logged_user'));
    $data['login_info']=$this->dModel->getLoginUserInfo(session()->get('logged_user'));
    echo view('login_activity_view.php',$data);
   }

public function avatar()
   {
$data=[];
if($this->request->getMethod()=='post')       {
$data['userdata']=$this->dModel->getLoggedInUserData(session()->get('logged_user'));
if($this->request->getMethod()=='post'){


    $rules=['avatar'=>'uploaded[avatar]|max_size[avatar,1024]|ext_in[avatar,png,jpg,gif]'];
    if($this->validate($rules)){
$file=$this->request->getFile('avatar');
if($file->isValid() && !$file->hasMoved())         {
if($file->move(FCPATH.'public\profiles',$file->getRandomName()))
                     {
//echo base_url().'/public/profiles/'.$file->getName();

  $path=base_url().'/public/profiles/'.$file->getName();
  $status=$this->dModel->updateAvatar($path,session()->get('logged_user'));     
  if($status==true){
 session()->setTempdata('success','Avatar is uploaded successfully',3);
                      return redirect()->to(current_url());  

  }    else{

     session()->setTempdata('error','Sorry! Unable to upload avatar',3);
                      return redirect()->to(current_url());  
  }       


                     }
                     else
                     {
                      session()->setTempdata('error',$file->getErrorString(),3);
                      return redirect()->to(current_url());  
                     }
                 }
                 else
                 {
session()->setTempdata('error','You have uploaded invalid file',3);
                      return redirect()->to(current_url());  
                 }
            }
            else
                  {
                    $data['validation']=$this->validator;
                  }

}}
    return view("avatar_view",$data);
   }

public function change_password()
        {
          $data=[];
          $data['userdata']=$this->dModel->getLoggedInUserData(session()->get('logged_user'));

if($this->request->getMethod()=='post')
          {
$rules=[
  'old_password'=>'required',
'new_password'=>'required|min_length[6]|max_length[16]',
'confirm_new_password'=>'required|matches[new_password]',
       ];

if($this->validate($rules))
           {
$old_password=$this->request->getVar('old_password');
$new_password=password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT);

if(password_verify($old_password,$data['userdata']->password))
           {
           if( $this->dModel->updatePassword($new_password,session()->get('logged_user')))
           {
            session()->setTempdata('success','password updated successfully',3);
            return redirect()->to(current_url());
           }
            else
            {
session()->setTempdata('error','Sorry unable to update password');

            }
           }
else
      {
        session()->setTempdata('error','old password is incorrect',3);
        return redirect()->to(current_url());
      }




           }

  else   
            {
    $data['validation']=$this->validator;
            }


}
        return view('change_password_view',$data);
        }


public function edit()
 {
$data=[];
$data['validation']=null;
$data['userdata']=$this->dModel->getLoggedInUserData(session()->get('logged_user'));

if($this->request->getMethod()=='post')
   {
    $rules=[
'username'=>'required|min_length[4]|max_length[20]',
'mobile'=>'required|exact_length[10]|numeric',
    ];

if($this->validate($rules))
  {
$userdata=[
  'username'=>$this->request->getVar('username',FILTER_SANITIZE_STRING),
  'mobile'=>$this->request->getVar('mobile',FILTER_SANITIZE_NUMBER_INT),
];

if($this->dModel->updateUserInfo($userdata,session()->get('logged_user')))

       {
 session()->setTempdata('success','profile updated successfully',3);
            return redirect()->to(current_url());
       }
else
       {
 session()->setTempdata('error','Unable to update profile information',3);
            return redirect()->to(current_url());
       }
  }
  else
  {
    $data['validation']=$this->validator;
  }

   }

return view('edit_view',$data);




 }





}