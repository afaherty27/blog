<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	
	$title = 'Create New Post';
	require_once('../tmpl/head.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{
		echo 'lets add a new post'; //DEBUG
?>
	<form method="post" action="#">
		<label for="title">Title: </title>
		<input type="text" name="title" value="" />
		<label for="">Description: </label>
		<input type="text" name="Description" value=""/>
		<label for="">Content: </label>
		<textarea name="content" rows="15" 
				  cols="100" value="">
		</textarea>
		<input type="submit" name="submit" value="submit" />
	</form>

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