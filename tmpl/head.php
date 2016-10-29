<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="<?php if(!empty($jsfile)) echo $jsfile;?>"></script>
	</head>
	<body>

	<h3 class="pageTitle"> <?php echo $title; ?></h3>
