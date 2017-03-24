<?php
	require_once('phpscripts/init.php');
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	$tbl = "tbl_videos";
	$catQuery = getAll3($tbl);


	if(isset($_POST['submit'])) 
	{
		//echo "submit clicked...";

		$video = $_FILES['video']['name'];
		//echo $video;
		$videoTitle = $_POST['video_title'];

		$uploadVideo = addVideo($video, $videoTitle);
		$message = $uploadVideo;

	}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Video</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<h1 class="hide">Add a Video</h1>

	<section class="row">

	<div class="small-12 column">

		<h2>Add a Video</h2>

		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_addMovie.php" method="post" enctype="multipart/form-data">
		<label>Video:</label><br>
		<input type="file" name="video" value="" size="32"><br><br>
		<label>Video Title:</label><br>
		<input type="text" name="video_title" value="" size="32" ><br><br>
		<input type="submit" name="submit" value="Add" >
		</form>

	</div>

	</section>


	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>