<?php
  //ini_set('display_errors', 1);
  //error_reporting(E_ALL);
  require_once('phpscripts/init.php');
  //confirm_logged_in();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Index Page</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <section class="row">
  <div class="small-12 column">
  <h2>Edit Index Page</h2>
  <?php
  
      $tbl="tbl_index"; /*only have to change*/
      $col="index_id";
      $id=1;
      single_edit($tbl, $col, $id);

  ?>
  </div>

  </section>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>