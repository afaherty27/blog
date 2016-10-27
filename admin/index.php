<?php
	$title = 'Admin Home Page';
	require_once('../tmpl/head.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['admin_id'])
	{
		echo 'logged in'; //DEBUG
	}
	else
	{
		$login_redirect = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
		header('Location: ' . $login_redirect);
	}
	
	require_once('../tmpl/footer.php');
?>