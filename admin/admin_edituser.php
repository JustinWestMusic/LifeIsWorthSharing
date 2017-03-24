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
    <title>Edit User Life is Worth Sharing</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<h1 class="hide">Edit User - Life is Worth Sharing</h1>

	<?php include('includes/header.php'); ?>

  <section class="row-expanded">

  <?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 -large-10 column">
	<?php if (!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post" class="editUserForm">
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

