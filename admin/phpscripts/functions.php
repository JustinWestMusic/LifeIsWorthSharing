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

	function addmovie($fimg, $thumb, $title, $year, $storyline, $runtime, $trailer, $price, $cat) 
	{
		include("connect.php");

		//echo "from addMovie()";
		
		$fimg  = mysqli_real_escape_string($link, $fimg);

		if($_FILES['movie_fimg']['type'] == "image/jpg" || $_FILES['movie_fimg']['type'] == "image/jpeg")//this is not a location it is a file type
		{
			//echo "this is a jpg";
			
			$targetpath = "../images/{$fimg}";

			if(move_uploaded_file($_FILES['movie_fimg']['tmp_name'], $targetpath))
			{
				//echo "file moved";
				
				$orig = "../images/{$fimg}";
				$th_copy = "../images/{$thumb}";

				if(!copy($orig, $th_copy))
				{
					echo "failed to copy";
				}

				//$size = getimagesize($orig);
				//echo $size[0]."x".$size[1];
				
				$qstring = "INSERT INTO tbl_movies VALUES(NULL, '{$thumb}','{$fimg}','noBG.jpg','{$title}','{$year}','{$storyline}','{$runtime}','{$trailer}','{$price}')";
				//echo $qstring;
				$result = mysqli_query($link, $qstring);
				
				if($result == 1)
				{
					$qstring2 = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);
					
					$row = mysqli_fetch_array($result2);
					$lastID = $row['movies_id'];
					
					//$qstring3 = "INSERT INTO tbl_l_mc VALUES(NULL, '{$lastID}','{$cat}')";
					//$result3 = mysqli_query($link, $qstring3);
					
					redirect_to("admin_index.php");
				}

			}
		}
		else
		{
			echo "Sorry you have uploaded an incompatible file type. Please remember that only .MP4s will be accepted.";
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