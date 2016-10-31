<?php
	require_once('../req/startsession.php');
	require_once('../req/appvars.php');
	require_once('../req/connectvars.php');
	
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	if(isset($_POST['submit']))
	{
		$user_id 	 = $_SESSION['user_id'];
		$blogtitle   = mysqli_real_escape_string($conn, trim($_POST['title']));
		$description = mysqli_real_escape_string($conn, trim($_POST['description']));
		$content 	 = mysqli_real_escape_string($conn, trim($_POST['content']));
		
		if(!empty($blogtitle) && !empty($description) && 
				!empty($content))
		{
			//insert query
			$insert = "INSERT INTO blog_post (user_id, title, description, content, post_date) " .
					"VALUES ('$user_id', '$blogtitle', '$description', '$content', NOW())";
			//execute query
			mysqli_query($conn, $insert) 
					or die('Error adding post to the database');
			//exit
			exit();
		}//end validation
		
		//close connection
		mysqli_close($conn);
	}
	

	$title = 'Write New Post';
	$jsfile = '../js/admin.js';
	require_once('../tmpl/head.php');
	require_once('../tmpl/nav.php');
?>

	<div class="container">
		<div class="row">
			<?php require_once('admintmpl/adminnav.php'); ?>
			<form id="newpost" method="post" class="col-sm-2 col-lg-4"
				  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				  <h4><?php echo $title; ?></h4>
				<div class="form-group">
					<label for="title">Title: </label><br />
					<input type="text" class="form-control" name="title" 
						   value="<?php if(!empty($blogtitle)) echo $blogtitle; ?>" />
					<label for="description">Description: </label>
					<input type="text" class="form-control" name="description"
						    value="<?php if(!empty($description)) echo $description; ?>"/>
					<label for="">Content: </label><br />
					<textarea name="content" class="form-control" rows="15" cols="100"
							  value="<?php if(!empty($content)) echo $content; ?>">
					</textarea>
					<label><input type="checkbox" value="1"> Publish</label>
				</div>
				<input type="submit" id="submitnewpost" class="btn btn-primary" 
					   value="ADD POST" name="submit" />
				<a class="btn btn-primary" data-dismiss="modal">Close</a><br />
				<small>REMINDER: POST WILL ONLY DISPLAY IF 'PUBLISH' IS SELECTED</small>
			</form>
		</div> <!-- end row -->
	</div><!-- end container -->
<?php
	require_once('../tmpl/footer.php');
?>
