<?php
namespace App\Filters;
use \Codeigniter\Filters\FilterInterface;
use \Codeigniter\HTTP\RequestInterface;
use \Codeigniter\HTTP\ResponseInterface;


class login_filter implements FilterInterface
{

public function before(RequestInterface $request)
   {
   	if(!session()->has('logged_user'))
   	{
   		return redirect()->to(base_url().'/log');
   	}
   	
   }

public function after(RequestInterface $request, ResponseInterface $response)
   {
   	;
   }

}