<?php  

namespace App\Controllers;

class HomeController extends Controller 
{

	public function __construct()
	{
		parent::__construct('UserModel', null);
	}

	public static function index()
	{
		(new self)->render('index');
	}

}