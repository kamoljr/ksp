<?php namespace App\Controllers;
use App\Libraries\G_Library;  //so we can easily load the custom library
class Home extends BaseController
{
	public function index()
	{
		echo view('login.php');
	}
	//--------------------------------------------------------------------

}
