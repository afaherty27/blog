<form id="newpost" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<div class="form-group">
		<label for="title">Title: </label><br />
		<input type="text" class="form-control" 
			   name="title" value="<?php if(!empty($title)) echo $title; ?>" /><br />
		<label for="description">Description: </label><br />
		<input type="text" class="form-control" 
			   name="description" value="<?php if(!empty($description)) echo $description; ?>"/><br />
		<label for="">Content: </label><br />
		<textarea name="content" class="form-control" 
				  rows="15" cols="100" value="<?php if(!empty($content)) echo $content; ?>">
		</textarea><br />
		<label><input type="checkbox" value="1"> Publish</label>
	</div>
	<input type="submit" id="submitnewpost" class="btn btn-primary" 
		   value="ADD POST" name="submit" />
	<a class="btn btn-primary" data-dismiss="modal">Close</a><br />
	<small>REMINDER: POST WILL ONLY DISPLAY IF 'PUBLISH' IS SELECTED</small>
</form>

