<?php
	//ADMIN LOGIN URL REDIRECT
	define('ADMIN_LOGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . 
			dirname($_SERVER['PHP_SELF']) . '/login.php');
			
	//ADMIN HOMEPAGE REDIRECT URL		
	define('ADMIN_HOME_URL', 'http://' . $_SERVER['HTTP_HOST'] . 
			dirname($_SERVER['PHP_SELF']));
?>