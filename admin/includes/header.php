<div id="header">
    <header class="row-expanded">
    <h2 class="hide">Main Header</h2>

   <nav id="mainNav" class="small-12 columns">
    <h2 class="hide">Main Navigation</h2>

    <img  class="float-left" id="icon" src="../images/heart.svg" alt="icon">

   <ul class="dropdown menu float-left" data-dropdown-menu>
  <li>
  <a href="admin_index.php">Home</a>
    <ul class="menu">
      <li><a href="../index.php">Life Is Worth Sharing</a></li>
    </ul>
  </li>
  </ul>

	<ul class="userNav float-right">
	<li class="userName">Username: <?php echo $_SESSION['users_name']; ?></li>
	<li id="lastLogin">Last Login: <?php echo beautifyDate($_SESSION['users_lastlogin']) ?></li>
	<li>	<a class="logOut" href="phpscripts/caller.php?caller_id=logout">Log Out</a></li>
	</ul>

     </nav>
     </header>
     </div>