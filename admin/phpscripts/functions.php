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

	function addVideo($video, $videoTitle) 
	{
		include("connect.php");

		//echo "from addMovie()";
		
		$video  = mysqli_real_escape_string($link, $video);

		if($_FILES['video']['type'] == "video/mp4")//this is not a location it is a file type
		{
			//echo "this is a jpg";
			
			$targetpath = "../videos/{$video}";

			if(move_uploaded_file($_FILES['video']['tmp_name'], $targetpath))
			{
				//echo "file moved";
				
				//$orig = "../videos/{$video}";
				/*$orig2 = "../videos/{$video}";
				

				if(!copy($orig, $orig2))
				{
					echo "failed to copy";
				}*/

				//$size = getimagesize($orig);
				//echo $size[0]."x".$size[1];
				
				$qstring = "INSERT INTO tbl_videos VALUES(NULL, '{$video}','{$videoTitle}')";
				//echo $qstring;
				$result = mysqli_query($link, $qstring);
				
				if($result == 1)
				{
					$qstring2 = "SELECT * FROM tbl_videos ORDER BY videos_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);
					
					$row = mysqli_fetch_array($result2);
					$lastID = $row['videos_id'];
					
					//$qstring3 = "INSERT INTO tbl_l_mc VALUES(NULL, '{$lastID}','{$cat}')";
					//$result3 = mysqli_query($link, $qstring3);
					
					redirect_to("admin_index.php");
				}

			}
		}
		else
		{
			echo "Sorry you have either uploaded an incompatible file type or a file larger than 2mb. Please remember that only .MP4s and file sizes smaller than 2mb will be accepted!";
		}

		mysqli_close($link);
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