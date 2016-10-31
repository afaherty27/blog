<?php
	//ADMIN LOGIN URL REDIRECT
	define('LOGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . 
			dirname($_SERVER['PHP_SELF']) . '/login.php');
			
	//ADMIN HOMEPAGE REDIRECT URL		
	define('ADMIN_HOME_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/blog/admin/');
			
	//HOME PAGE REDIRECT URL
	define('HOME_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/blog/');
?>