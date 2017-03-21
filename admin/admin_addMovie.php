<?php
	require_once('phpscripts/init.php');
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	$tbl = "tbl_cat";
	$catQuery = getAll($tbl);


	if(isset($_POST['submit'])) 
	{
		//echo "submit clicked...";

		$fimg = $_FILES['movie_fimg']['name'];
		//echo $fimg;
		$thumb = "TH_{$fimg}";
		$title = $_POST['movie_title'];
		$year = $_POST['movie_year'];
		$storyline = $_POST['movie_storyline'];
		$runtime = $_POST['movie_runtime'];
		$price = $_POST['movie_price'];
		$cat = $_POST['catlist'];
		$uploadMovie = addMovie($fimg,$thumb,$title,$year,$storyline,$runtime,$price,$cat);
		$message = $uploadMovie;

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
<h1 class="hide">Add Movie</h1>

	<section class="row">

	<div class="small-12 column">

		<h2>Add Movie</h2>

		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_addMovie.php" method="post" enctype="multipart/form-data">
		<label>Front Image:</label><br>
		<input type="file" name="movie_fimg" value="" size="32"><br><br>
		<label>Movie Title:</label><br>
		<input type="text" name="movie_title" value="" size="32" ><br><br>
		<label>Movie Year:</label><br>
		<input type="text" name="movie_year" value="" size="32" ><br><br>
		<label>Movie Storyline:</label><br>
		<input type="text" name="movie_storyline" value="" size="32" ><br><br>
		<label>Movie Runtime:</label><br>
		<input type="text" name="movie_runtime" value="" size="32" ><br><br>
		<label>Movie Trailer:</label><br>
		<input type="text" name="movie_trailer" value="" size="32" ><br><br>
		<label>Movie Price:(Do not add '$', the system will add this in)</label><br>
		<input type="text" name="movie_price" value="" size="32" ><br><br>
		<input type="submit" name="submit" value="Add" >
		</form>

	</div>

	</section>


	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>