<?php

namespace App\Controllers;

class Connect extends BaseController
{
    public function index()
    {
       $db=\Config\Database::connect();
       
    }
}
