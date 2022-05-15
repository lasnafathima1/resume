<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Register;
class Home extends BaseController
{
	public function __construct(){
		helper('form');
	}
    public function index()
    {
    	
        echo view('body.php');
     
    }

 
 public function login()
    {
    	
        echo view('login_view.php');
     
    }



}
