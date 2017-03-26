<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = "tbl_index";
	$content = getAll($tbl);

?>

<?php
	function beautifyDate($date)
	{
		return date('l F j, Y, g:i a', strtotime($date));
		//Parses about any English textual datetime description into a Unix timestamp. To put it simply it converts numbers into letters and makes dates look more pretty.
		//http://php.net/manual/en/function.date.php
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Content</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  </head>
<body>
	<h1 class="hide">Delete Content</h1>
	
	<?php include('includes/header.php'); ?>


	<section class="row-expanded">

	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column deleteContent">
	<h2>Delete Content</h2>
	<?php
		while($row = mysqli_fetch_array($content))
		{
			echo "{$row['index_headerCaption']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec1Title']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec1Text']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec2Title']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec3Title']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec3Fact1']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_promoVidSecTitle']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec4Title']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec4Title2']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
			echo "{$row['index_sec4Text']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['index_id']}\">Delete Content</a>";
		}

	?>

	</div>
	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>

