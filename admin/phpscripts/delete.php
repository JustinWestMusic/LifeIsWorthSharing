<?php	

	function deleteContent($id)
	{
		include("connect.php");
		//$delstring = "DELETE FROM tbl_index WHERE index_id = {$id}";
		/*$delstring =*/

		echo "This is NOT an error! Deleting content has been purposely disabled for this site. Please contact the the system administrator for more information. Click on the back arrow in your browser window to return to Life is Worth Sharing's Content Management System.";
		//$delquery = mysqli_query($link, $delstring);

		/*if($delquery)
		{
			redirect_to("../admin_index.php");
		}*/
		//deletes the entire row
		/*else
		{
			echo "This is NOT an error! Deleting content has been purposely disabled for this site. Please contact the the system administrator for more information. Click on the back arrow in your browser window to return to Life is Worth Sharing's Content Management System.";
		}
		*/
		mysqli_close($link);
	}

?>