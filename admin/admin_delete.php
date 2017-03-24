<?php
	require_once('phpscripts/init.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);



?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>
	<h1>Delete User</h1>

	<?php include('includes/header.php'); ?>


	<section class="row-expanded">


	<?php include('includes/sidepanel.php'); ?>

	<div id="welcomePanel" class="small-12 medium-19 -large-10 column">
	<?php
		while($row = mysqli_fetch_array($users))
		{
			echo "{$row['user_name']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
		}

	?>

	</div>
	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>

