<?php
	require_once('../req/startsession.php');
	
	$title = 'Admin Home Page';
	require_once('../tmpl/head.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{
		echo 'logged in'; //DEBUG
?>
	<a href="#">Write new blog post</a>
	<a href="#">Edit existing posts</a>
	<a href="#">Publish Posts</a>
<?php
	}
	else
	{
		$login_redirect = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
		header('Location: ' . $login_redirect);
	}
	
	require_once('../tmpl/footer.php');
?>