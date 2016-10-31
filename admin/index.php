<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	
	
	//require user to be logged in, else redirect to login page
	if (isset($_SESSION['user_id']))
	{	
	$title = 'Admin Home Page';
	$jsfile = '../js/admin.js';
	require_once('../tmpl/head.php');
	require_once('../tmpl/nav.php');
	
?>	
		<div class="container">
			<div class="row">
<?php
		require_once('admintmpl/adminnav.php');
?>
			<div id="adminContent" class="col-sm-2 col-lg-4">
				<h1>stats</h1>
			</div><!--end col-sm-9 col-lg-10-->
			</div><!--end row -->
		</div><!--end container-fluid ->
<?php		
	}
	else
	{
		header('Location: ' . LOGIN_URL);
	}
	
	require_once('../tmpl/footer.php');
?>


