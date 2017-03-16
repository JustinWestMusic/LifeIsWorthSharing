<?php
	function logIn($username, $password, $ip)
	{
		require_once('connect.php');
		//require_once('init.php');
		$username = mysqli_real_escape_string($link,$username); //Clears any whitespace between characters
		//$password = password_verify($password, $ecPassword);
		$password = mysqli_real_escape_string($link,$password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name ='{$username}' AND user_pass = '{$password}'";
		
		//$hasher = password_verify($password, $ecPassword);

		$user_set = mysqli_query($link, $loginString);

		if(mysqli_num_rows($user_set))
		{
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			$_SESSION['users_creds'] = $id;
			$_SESSION['users_fname'] = $found_user['user_fname']; //Outputs the logged in user's first name
			$_SESSION['users_name'] = $found_user['user_name']; //Outputs the logged in user's username

			/*
			SESSIONS ARE USED TO STORE DATA SO THAT THEY CAN BE USED ELSEWHERE ON THE SITE AND ON ANY OTHER PAGE
			*/

			//Last Login Date
			$_SESSION['users_lastlogin'] = $found_user['user_lldate'];


			//IP
			if(mysqli_query($link, $loginString))
			{
				$updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id='{$id}'";
				$lastLoginQuery = "UPDATE tbl_user SET user_lldate = NOW() WHERE user_id='{$id}'"; //Updates the user's last login date using a MySQL call.
				$updateQuery = mysqli_query($link, $updateString);
				$updateLastLogin = mysqli_query($link, $lastLoginQuery);

			}

			//First Login Session Set
			$_SESSION['firstLogin'] = $found_user['user_firstLogin'];

			//First Login if else statement// Once the user is created a value of 1 is added to the database. Once they log out and log back in again they will be redirected to the admin_index.php page
			if($_SESSION['firstLogin'] == 0) 
			{
				$updateflString = "UPDATE tbl_user SET user_firstLogin = 1 WHERE user_id = '{$id}'";
				$updatefirstLogin = mysqli_query($link, $updateflString); 
				redirect_to("admin_edituser.php");
			}
			else
			{
				redirect_to("admin_index.php");
			}


			//redirect_to("admin_index.php");

		}

		//LOCKOUT

		/*elseif
		{
			if($loginAttempts < 3)
			{
				$moreAttempts = $loginAttempts++;

				session_destroy();
			}*/
			else
			{
			$message = "Username/Password was incorrect. You now have X chances to successfully login!";
			return $message;
			}
		//}

		mysqli_close($link);
	}

?>