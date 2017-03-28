<?php
	require_once('phpscripts/connect.php');
	require_once('phpscripts/init.php');
	confirm_logged_in();

?>

<?php
	function beautifyDate($date)
	{
		return date('l F j, Y, g:i a', strtotime($date));
		//Parses about any English textual datetime description into a Unix timestamp. To put it simply it converts numbers into letters and makes dates look more pretty.
		//http://php.net/manual/en/function.date.php
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings - Life is Worth Sharing</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  </head>
<body>

	<h1 class="hide">User Settings - Life is Worth Sharing</h1>
	

	<?php include('includes/header.php'); ?>



	
	

	<section class="row-expanded">

	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column userSettings">

	<h2>User Settings</h2>

	<div class="row float-center">

	<div class="small-12 medium-4 column float-center">
	<object data="images/createuser.svg" class="cmsIcon"></object>
	<a  href="admin_createuser.php">Create User</a>
	</div>

	<div class="small-12 medium-4 column float-center">
	<object data="images/edituser.svg" class="cmsIcon"></object>
	<a href="admin_edituser.php">Edit User</a>
	</div>

	<div class="small-12 medium-4 column float-center">
	<object data="images/deleteuser.svg" class="cmsIcon"></object>
	<a href="admin_deleteuser.php">Delete User</a>
	</div>

	</div>

	
	

	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
	
</body>
</html>