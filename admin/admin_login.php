<?php
	$ip = $_SERVER["REMOTE_ADDR"];

	require_once('phpscripts/init.php');

	if(isset($_POST['submit']))
	{
		//echo "Submission works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username != "" && $password != "")
		{
			$result = logIn($username, $password, $ip);
			$message = $result;
			//echo "All good";
		}
		else
		{
			$message = "Please fill in the fields";
		}
	}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
        
		<header>
        <h1 id="adminH1">Admin Login</h1>
        </header>
	
    <div class="row" id="form">   
	<?php if(!empty($message)) {echo $message;} ?>
	<form method="post" action="admin_login.php" class="small-12 column">
	<h2 class="hide">Login Form</h2>
		<label>Username</label>
		<input type="text" name="username" value="" required id="username">
		<label>Password</label>
		<input type="password" name="password" value="" required id="password">
		<input type="submit" name="submit" value="Login" id="submit">
	</form>
	</div>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>