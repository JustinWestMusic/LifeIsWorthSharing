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
    <script src="js/ScrollToPlugin.min.js"></script>
  </head>

  <body>
  <h1 class="hide">Life is worth sharing</h1>
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
            <li><a href="#" id="1">About</a></li>
            <li><a href="#" id="2">Stories</a></li>
            <li><a href="#" id="3">Facts</a></li>
            <h4 id="headerRegBtn" class="float-right"><a href="https://www.giftoflife.on.ca/en/" id="4">Register</a></h4>

       </ul>
       </div>
        </nav>



        <div class="small-12 medium-10 large-8 colums" id="headerCapt">
        

        <?php if(!is_string($getElements)) :?>
        
          <?php while($row = mysqli_fetch_array($getElements)) : ?>
          
          <h2><?php echo $row['index_headerCaption']; ?></h2>

      </div>

        
        <div class="small-pull-4 large-pull-5 columns" id="socialIcons2">
        <a href="#"><img src="images/facebook.svg" class="icons2" alt="Facebook"></a>

        <a href="#"><img src="images/instagram.svg" class="icons2" alt="Instagram"></a>

      <a href="#"><img src="images/twitter.svg" class="icons2" alt="Twitter"></a>
       </div>


      </header>
       </div>

       <section  class="row centerTxt" id="info">
         <div class="small-12 large-8 small-centered columns" id="lifeSec1">
           <h2><?php echo $row['index_sec1Title']; ?></h2>
           <p><?php echo $row['index_sec1Text']; ?></p>
         </div>
       </section>

       <section class="row-epanded centerTxt" id="stories">
         <div class="small-12 large-8 small-centered columns" id="lifeSec2">
           <h2><?php echo $row['index_sec2Title']; ?></h2>

      <?php endwhile; ?>

      <?php endif; ?>

      <?php if(!is_string($getVideos)) :?>
        
          <?php while($row = mysqli_fetch_array($getVideos)) : ?>
           <img src="images/video.gif" alt="Stories">
           
           <?php echo "<video controls> <source src=\"videos/{$row['video']}\" type=\"video/mp4\"> </video>"; ?>

      <?php endwhile; ?>

      <?php endif; ?>
         </div>
       </section>

       <section class="row-expanded centerTxt" id="facts">
         <div class="small-12 medium-10 small-centered large-8 columns" id="lifeSec3">
           <h2>DID <span class="colourChng">YOU</span> KNOW?</h2>
         <p id="fact1">90% of Canadians support organ and tissue donation but
           less than 20% have made plans to donate.</p>
         </div>
       </section>


<section class="row-expanded centerTxt" id="promoVid">
<h2><span class="colourChng">#LIFE</span>IS<span class="colourChng">WORTH</span>SHARING</h2>
       <div class="row-expanded centerTxt" id="infoGraphic">
         <div class="small-12 large-8 small-centered columns">
           <img src="images/video.gif" alt="Stories">
         </div>
            </div>
       </section>


      <section class="row-expanded centerTxt" id="register">
      <div class="small-12 small-centered columns" id="lifeSec4">
           <h2>BECOME A <span class="colourChng">DONOR</span> TODAY</h2>
           <h3>BECAUSE <span class="colourChng">LIFE IS WORTH SHARING</span></h3>

          <h3>Click the button below to become an organ donor today.</h3>

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
