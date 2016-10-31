<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	$title = 'Admin Home Page';
	$jsfile = '../js/admin.js';
	require_once('../tmpl/head.php');
	require_once('../tmpl/nav.php');
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{	
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2">
				<nav class="nav navbar-default navbar-fixed-side">
					<ul class="nav nav-pills nav-stacked">
						<li><a id="new">New Post</a></li>
						<li><a href="#">Edit posts</a></li>
						<li><a href="#">Publish Posts</a></li>
					</ul>
				</nav><!--end navbar -->
			</div><!--end col-sm-1 col-lg-2 -->
			<div id="adminContent" class="col-sm-2 col-lg-4">
				
			</div><!--end col-sm-9 col-lg-10-->
			<div id="stats" class="col-sm-2 col-lg-4">
				<h1>stats</h1>
			</div>
		</div><!--end row -->
	</div><!--end container-fluid ->
	
<?php
	}
	else
	{
		header('Location: ' . LOGIN_URL);
	}
	
	require_once('../tmpl/footer.php');
	
	/*
	<ul class="nav nav-pills nav-stacked">
		<li><a href="#newpost" data-toggle="modal">new post</a></li>
		<li><a href="#">Edit posts</a></li>
		<li><a href="#">Publish Posts</a></li>
	</ul>
	*/
?>


