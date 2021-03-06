<?php 
  require_once('admin/phpscripts/init.php');


    $tbl = "tbl_index";
    $getElements = getAll($tbl);

    $mtbl = "tbl_videos";
    $getVideos = getAll2($mtbl);

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life is Worth Sharing</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
    <script src="js/TweenMax.min.js"></script>
  </head>

  <body>
  <h1 class="hide">Life Is Worth Sharing</h1>
	<div id="header">
    <header class="row-expanded">
    <h2 class="hide">Main Header</h2>

   <nav id="mainNav" class="small-12 columns">
    <h2 class="hide">Main Navigation</h2>

    <img  class="float-left" id="icon" src="images/heart.svg" alt="icon">

   <div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="large">
    <button class="menu-icon float-right" type="button" data-toggle></button>
                </div>
        <div id="top-menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#info">Mission</a></li>
            <li><a href="#stories">Stories</a></li>
            <li><a href="#facts">About</a></li>
            <h4 id="headerRegBtn" class="small-centered"><a id="4">Register</a></h4>

       </ul>
       </div>
        </nav>

        <div class="small-12 medium-10 large-8 colums" id="headerCapt">
        
          <?php while($row = mysqli_fetch_array($getElements)): ?>
          
          <h2><?php echo $row['index_headerCaption']; ?></h2>

      </div>

        
        <div class="small-12 columns" id="socialIcons2">
        <a href="#"><img src="images/facebook.svg" class="icons2" alt="Facebook"></a>

        <a href="#"><img src="images/instagram.svg" class="icons2" alt="Instagram"></a>

      <a href="#"><img src="images/twitter.svg" class="icons2" alt="Twitter"></a>
       </div>

      </header>
       </div>

       <section  class="row centerTxt" id="info">
         <div class="small-12 small-centered large-8 columns" id="lifeSec1">
         
           <h2><?php echo $row['index_sec1Title']; ?></h2>
           <p><?php echo $row['index_sec1Text']; ?></p>
      
         </div>
       </section>

       <section class="row-expanded centerTxt" id="stories">
         <div class="small-12 small-centered columns large-8" id="lifeSec2">
           <h2><?php echo $row['index_sec2Title']; ?></h2>
           
          <?php while($row2 = mysqli_fetch_array($getVideos)): ?>
           
           <?php echo "<h2>{$row2['videos_title']}</h2>"; ?>
           <?php echo "<video controls poster=\"images/patricia-smith-poster.jpg\"> <source src=\"videos/{$row2['video']}\" class=\"flex-video\" type=\"video/mp4\"> </video>"; ?>

           <?php endwhile; ?>

         </div>
       </section>

       <section class="row-expanded centerTxt" id="facts">
         <div class="small-12 medium-10 small-centered large-8 columns" id="lifeSec3">

           <h2><?php echo $row['index_sec3Title']; ?></h2>

         <p id="fact1"><?php echo $row['index_sec3Fact1']; ?></p>
           
         </div>
       </section>

<section class="row centerTxt" id="promoVid">
<div class="small-12 columns">
<h2><?php echo $row['index_promoVidSecTitle']; ?></h2>
</div>
       <div class="row centerTxt" id="infoGraphic">
         <div class="small-12 medium-6 columns">
           <video controls>

            <source src="videos/lifeisworthsharing-hashtag.mp4" class="flex-video" type="video/mp4">

           </video>
           </div>
            
            <div class="small-12 medium-6 columns">
            <video controls poster="images/infographic-poster.jpg">

            <source src="videos/infographic.mp4" class="flex-video" type="video/mp4">

           </video>
         </div>
            </div>
       </section>

      <section class="row centerTxt" id="register">
      <div class="small-12 columns" id="lifeSec4">
           <h2><?php echo $row['index_sec4Title']; ?></h2>
           <h3><?php echo $row['index_sec4Title2']; ?></h3>

          <h3><?php echo $row['index_sec4Text']; ?></h3>
          <?php endwhile; ?>

          <a role="button" href="http://bit.ly/ontarioorgandonation" target="_blank" id="registerButton">Register</a>

      </div>

      </section>


<div id="mainFooter">
<footer class="row-expanded">
  <h2 class="hide">Main Footer</h2>

  <h4 id="sm">Follow us on social media!</h4>

  <div class="text-center" id="socialIcons">

    <a href="#"><img src="images/facebook.svg" class="icons" alt="Facebook"></a>

    <a href="#"><img src="images/instagram.svg" class="icons" alt="Instagram"></a>

    <a href="#"><img src="images/twitter.svg" class="icons" alt="Twitter"></a>
 </div>

    <div id="trillium" class="small-12">

     <p id="tag">#LifeIsWorthSharing</p>

        <a href="https://www.giftoflife.on.ca/en/" target="_blank"><img id="tgln" src="images/trillium.png" alt="trillium-gift-of-life-network"></a>
        <p>Trillium Gift of Life Network</p>
    </div>
</footer>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>