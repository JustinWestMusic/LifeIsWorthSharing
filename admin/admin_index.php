<?php
	require_once('phpscripts/connect.php');
	require_once('phpscripts/init.php');
	confirm_logged_in()

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
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>
	
	<h1 class="hide">Admin Index</h1>
	

	<section class="row" id="adminSection">
	<div id="welcomePanel" class="small-12 medium-7 medium-push-5 column">
	<h2 class="hide">Welcom Panel</h2>
	<h2> <?php echo welcomeTime(); ?> <?php echo $_SESSION['users_fname']; ?>!</h2>
	<p>What will you be doing <?php echo timeOfDay(); ?></p>
	</div>

	<aside id="sidePanel" class="small-12 medium-5 medium-pull-7 column">
	<h2>Admin Panel</h2>
	<p class="userName">Username: <?php echo $_SESSION['users_name']; ?></p>
	<a class="logOut" href="phpscripts/caller.php?caller_id=logout">Log Out</a>

	<p id="lastLogin">Last Login: <?php echo beautifyDate($_SESSION['users_lastlogin']) ?></p>

	<a class="editAccount" href="admin_edituser.php">Edit Account</a>

	<a class="createNU" href="admin_createuser.php">Create New User</a>
	

	<button class="button">Dashboard</button>
	<button class="button">Articles</button>
	<button class="button">Pages</button>
	<button class="button">Settings</button>
	</aside>
	

	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
	
</body>
</html>