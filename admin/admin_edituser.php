<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	$id = $_SESSION['users_creds'];
	$popForm = getUser($id);
	//echo $popForm;


	if(isset($_POST['submit']))
	{
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		editUser($id, $fname, $lname, $email, $username, $password);
	}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

	<header class="row">
	<div class="small-12 column">
	<h1>Edit User</h1>
	<a href="admin_index.php" class="goBack">Go Back</a>
	</div>
	</header>

	<div class="row">
	<?php if (!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post" class="small-12 column editUserForm">
	<h2 class="hide">Edit User Form</h2>
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php echo $popForm['user_fname']; ?>">
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php echo $popForm['user_lname']; ?>">
		<label>E-Mail:</label>
		<input type="text" name="email" value="<?php echo $popForm['user_email']; ?>">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $popForm['user_name']; ?>">
		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $popForm['user_pass']; ?>">
		<br><br>
		<input type="submit" name="submit" value="Edit Account">

	</form>
	</div>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>

