<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegisterModel;
class Register extends BaseController
{
public $registerModel;
public $session;
public $email;
public function __construct(){
        helper('form');
        helper('date');
        $this->registerModel=new RegisterModel();
        $this->session=\Config\Services::session();
        $this->email=\Config\Services::email();


    }
    
    public function index()
    {
    	$data=[];
        $data['validation']=null;
if($this->request->getMethod()=='post')
        {
        	$rules=[
        	'username'=>'required|min_length[4]|max_length[20]|is_unique[users.username]',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[6]|max_length[16]|is_unique[users.password]',
            'cpassword'=>'required|matches[password]',
            'mobile'=>'required|exact_length[10]|numeric',
        	       ];

if($this->validate($rules))
                 {
                 	
$uni_id=md5(str_shuffle('abcdefghijklmnopqrstuvxyz'.time()));
$userdata= [
'username'=>$this->request->getVar('username',FILTER_SANITIZE_STRING),
'email'=>$this->request->getVar('email'),
'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
'mobile'=>$this->request->getVar('mobile'),
'uni_id'=>$uni_id,
'activation_date'=>date("Y-m-d h:i:s")

           ];
if($this->registerModel->createUser($userdata))
{
$to=$this->request->getVar('email');
$subject='Account Activation Link-RESUME PRO';
$message='Hi '.$this->request->getVar('username',FILTER_SANITIZE_STRING).",<br><br>Thanks Your Account created successfully Please Click Below Link to Activate our Account<br><br><a href='".base_url()."/register/activate/".$uni_id."'target='_blank'>Activate now</a><br><br>Thanks<br>RESUME PRO";

       $from='hirunikawms@gmail.com';            
    
       $this->email->setFrom($from);
       $this->email->setTo($to);
       $this->email->setSubject($subject);
       $this->email->setMessage($message);
      if($this->email->send())
                  {
	
$this->session->setTempdata('success','Account created succefully Please activate your accountn',3);
return redirect()->to(current_url());

                  }

      else{
$this->session->setTempdata('error','Account created succefully Sorry unable to send activation link.Contact admin',3);
return redirect()->to(current_url());


      //$data=$email->printDebugger(['headers']);
      //print_r($data);
          }


}

else
{
$this->session->setTempdata('error','sorry! unable to create an account,Try again',3);
return redirect()->to(current_url());
}
                 }
else
                   {
                   	$data['validation']=$this->validator;
                   }



        }




       echo view('register_view.php',$data);
    }

public function activate($uni_id=null)
{
	$data=[];
if(!empty($uni_id))
{
$userdata=$this->registerModel->verifyUniId($uni_id);
if($userdata){
if($this->verifyExpiryTime($userdata->activation_date))
                   {

if($userdata->status=='inactive')
                {
$status=$this->registerModel->updateStatus($uni_id);
if($status==true){
	$data['success']='Account activated successfully';
}
                }
                else
                {
                	$data['success']='Your account is already activated';
                }


                   }
	else
	               {
	               	$data['error']='Sorry Activation link was expired';
	               }



}else
{
	$data['error']='Sorry! We are unable to find your account';
}


}
else
{
$data['error']='Sorry! Unable to process your request';
}




 echo view('activate_view.php',$data);
}
public function verifyExpiryTime($regTime)
    {
$currTime=now();
$regtime=strtotime($regTime);
$diffTime=(int)$currTime-(int)$regTime;
if(3600<$diffTime)
    {
return true;
    }
else{
return false;
}


    }

}
