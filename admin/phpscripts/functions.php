<?php
	
	function redirect_to($location) 
	{
		if($location != NULL) 
		{
			header("Location: {$location}");
			exit;
		}
	}

	date_default_timezone_set('America/Toronto'); //Selects and sets a timezone

	function welcomeTime() //This function uses if and elseif statements to return a specific message based on the time of day. The comparison is made between certain hours of the day using the 24 hour clock system.
	{
 
	   if(date("H") < 12)
		   {
		     return "Good Morning";
		   }
	   elseif(date("H") > 11 && date("H") < 17)
		   {
		     return "Good Afternoon";
		   }
	   elseif(date("H") > 16 && date("H") < 23)
		   {
		     return "Good Evening";
		   }
		elseif(date("H") < 24)
		   {
		     return "You're up pretty late";
		   }
	 
	}

	function timeOfDay()
	{
 
	   if(date("H") < 12)
		   {
		     return "this Morning?";
		   }
	   elseif(date("H") > 11 && date("H") < 17)
		   {
		     return "this Afternoon?";
		   }
	   elseif(date("H") > 16 && date("H") < 24)
		   {
		     return "tonight?";
		   }
	}

	function sendInfo($email, $username, $password, $fname)
	{
		$to = $email;
		$subj = "Message from admin site";
		$body = "Email: {$email}\n\nUsername: {$username}\n\nPassword: {$password}";
		$linkToSite = "Hello". " ". $fname . ", ". "You have just signed up at AdminTest. Using the provided password below please go to https://justinwest.ca/admintest/admin_login.php to Login.";
			
		//echo $body;
		
		
		//This will not work locally on your machine
		mail($to, $subj, $body, $linkToSite);
		
	}
	
?>