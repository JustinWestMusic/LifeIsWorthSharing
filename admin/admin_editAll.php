<?php
  //ini_set('display_errors', 1);
  //error_reporting(E_ALL);
  require_once('phpscripts/init.php');
  //confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your Admin Panel</title>
</head>
<body>
  <?php
  
      $tbl="tbl_index"; /*only have to change*/
      $col="index_id";
      $id=1;
      single_edit($tbl, $col, $id);
  
  ?>
</body>
</html>