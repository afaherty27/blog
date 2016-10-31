<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	$title = 'Admin Home Page';
	require_once('../tmpl/head.php');
	require_once('../tmpl/nav.php');
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{
	
		
?>
	<ul>
	<a href="newpost.php">Write new blog post</a><br />
	<li><a href="#newpost" data-toggle="modal">new post</a></li><br />
	<a href="#">Edit existing posts</a><br/>
	<a href="#">Publish Posts</a><br/>
	</ul>
<?php
	}
	else
	{
		header('Location: ' . LOGIN_URL);
	}
	
	require_once('../tmpl/footer.php');
?>


<!-- admin new post modal -->
<div class="modal fade" id="newpost" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h4>New Post</h4>
		<div class="modal-body">
			
		</div> <!-- END modal-body -->
	  </div> <!-- END modal-header -->
	</div> <!-- END modal-content-->
  </div> <!-- END modal-dialog -->
</div> <!-- END modal -->