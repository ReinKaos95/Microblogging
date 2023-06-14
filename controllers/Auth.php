<?php 

/**
 * 
 */
class authController
{
	
	function __construct()
	{
		
	}

	public function login()
	{
		require_once 'views/auth/login.php';
	}

	public function register()
	{
		require_once 'views/auth/register.php';
	}
}
 ?>