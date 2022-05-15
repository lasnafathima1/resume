<?php

namespace App\Controllers;

class UserDetails extends BaseController
{

public function __construct(){
        helper('form');
   


    }
    


    public function index()
    {

      //echo view('Build_resume/Build_view.php');
       
    }

    public function create()
    {

      echo view('Build_resume/Create_view.php');
       
    }



}
