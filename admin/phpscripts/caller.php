<?php
		require_once('init.php');

		if(isset($_GET['caller_id']))
		{
			$dir = $_GET['caller_id'];

			if($dir == "logout")
			{
				logged_out();
			}
			else if($dir == "delete")
			{
				$id = $_GET['id'];
				deleteUser($id);
			}
			else if($dir == "deleteCon")
			{
				$id = $_GET['id'];
				deleteContent($id);
			}
			else
			{
				echo "caller id was passed incorrectly.";
			}
		}
		
?>