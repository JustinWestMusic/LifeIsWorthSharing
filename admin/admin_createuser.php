<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	if(isset($_POST['submit']))
	{
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$username = trim($_POST['username']);
		$randomPassword = bin2hex(openssl_random_pseudo_bytes(2));
		//bin2hex essentially converts binary (bytes) data into hexadecimal representation (one the user can read).
		//Returns an ASCII string containing the hexadecimal representation of the string which in this case is openssl_random_pseudo_bytes. This in turn auto-generates a password or string of 8 characters (4*2) using random characters.
		$password = password_hash($randomPassword, PASSWORD_DEFAULT);
		////Converts the auto-generated password to 32 encrypted characters in the database.
		//$password = trim($_POST['password']);
		$level = ($_POST['lvllist']);

		sendInfo($email, $username, $password, $fname);

		if(empty($level))
		{
			$message = "Please select a user level.";
		}
		else
		{
			$result = createUser($fname, $lname, $email, $username, $password, $level);
			$message = $result;
		}
	}

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
    <title>Create User</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>
	

	<h1 class="hide">Create User</h1>

	<?php include('includes/header.php'); ?>


	<section class="row-expanded">
	
	<?php include('includes/sidepanel.php'); ?>

	<div class="small-push-12 medium-10 column">
	<?php if (!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post" class="createUserForm">
	<h2>Create User</h2>
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php if (!empty($fname)){echo $fname;} ?>">
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php if (!empty($lname)){echo $lname;} ?>">
		<label>E-Mail:</label>
		<input type="text" name="email" value="<?php if (!empty($email)){echo $email;} ?>">
		<label>Username:</label>
		<input type="text" name="username" value="<?php if (!empty($username)){echo $username;} ?>">
		<label>Your password will be auto-generated and sent to your E-Mail!</label>
		<!--<input type="text" name="password" value="<?php //if (!empty($password)){echo $password;} ?>">-->
		<br><br>
		<label>Please Select a User Level</label>
		<select name="lvllist">
			<option value="">Please select a user level...</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Create User">
		<br><br>

	</form>
	</div>

	</section>

	

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>

