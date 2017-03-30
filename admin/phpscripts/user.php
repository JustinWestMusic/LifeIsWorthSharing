<?php
	
	function createUser($fname, $lname, $email, $username, $password, $level)
	{
		require_once("connect.php");
		$ip = 0;
		$lldate = "0000-00-00 00:00:00";
		$attempts = 0;
		$firstLogin = 0;
		//$ecPassword = password_hash($password, PASSWORD_DEFAULT);
		//$password = password_hash($password); 
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$email}','{$username}','{$password}','{$level}','{$ip}','{$lldate}','{$attempts}', '{$firstLogin}')";

		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);

		if($userquery)
		{
			redirect_to("admin_index.php");
		}
		else
		{
			$message = "You have an error";
			return $message;
		}



		mysqli_close($link);
	}

	function getUser($id)
	{
		require_once("connect.php");
		//Create Query
		//Run Query	
		//Gather Object, Fetch Array
		//Return
		//Else
		//Error Message
		//Return

		$query = "SELECT * FROM tbl_user WHERE user_id = {$id}";

		$userquery = mysqli_query($link, $query);


		if($userquery)
		{
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}
		else
		{
			$error =  "It doesn't work!";
			return $error;
		}

		mysqli_close($link);
	}

	function editUser($id, $fname, $lname, $email, $username, $password)
	{
		include("connect.php");

		$updateString = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_email='{$email}', user_name='{$username}', user_pass='{$password}' WHERE user_id={$id}";

		$updatequery = mysqli_query($link, $updateString);

		if($updatequery)
		{
			redirect_to("admin_index.php");
		}
		else
		{
			$message = "Not going to happen!";
			return $message;
		}

		mysqli_close($link);
	}


	function deleteUser($id)
	{
		include("connect.php");
		$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery)
		{
			redirect_to("../admin_index.php");
		}
		else
		{
			echo "This user cannot be deleted.";
		}

		mysqli_close($link);
	}

?>