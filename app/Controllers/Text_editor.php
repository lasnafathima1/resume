<?php

namespace App\Controllers;

class Text_editor extends BaseController
{
    public function index()
    {
       echo view('Text_editor_view.php');
       
    }
}
