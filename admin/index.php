<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	$title = 'Admin Home Page';
	require_once('../tmpl/head.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{
		echo 'logged in'; //DEBUG
?>
	<a href="newpost.php">Write new blog post</a>
	<a href="#">Edit existing posts</a>
	<a href="#">Publish Posts</a>
<?php
	}
	else
	{
		header('Location: ' . LOGIN_URL);
	}
	
	require_once('../tmpl/footer.php');
?>