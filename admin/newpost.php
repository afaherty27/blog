<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	
	$title = 'Create New Post';
	require_once('../tmpl/head.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{
?>
	<form method="post" action="#">
		<label for="title">Title: </label><br />
		<input type="text" name="title" value="" /><br />
		<label for="">Description: </label><br />
		<input type="text" name="Description" value=""/><br />
		<label for="">Content: </label><br />
		<textarea name="content" rows="15" 
				  cols="100" value="">
		</textarea><br />
		<input type="submit" name="submit" value="submit" />
	</form>
	<br />
	<a href="index.php">ADMIN HOME</a>
	<a href="#">Edit existing posts</a>
	<a href="#">Publish Posts</a>
<?php
	}
	else
	{
		header('Location: ' . ADMIN_LOGIN_URL);
	}
	
	require_once('../tmpl/footer.php');
?>