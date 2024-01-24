<?php
if($menu==1)
{
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Covid19App</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li id=l1><a href="signup.php" >Sign Up</a></li>
        <li id=l2><a href="login.php">Login</a></li>
		<li id=l3><a href="loginadmin.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}
?>


<?php
if($menu==2)
{
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="user.php">Covid19App</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li id=l1><a href="visit.php" >Visit</a></li>
        <li id=l2><a href="victim.php">Victim</a></li>
		<li id=l3><a href="assoc.php">Victim Association</a></li>
		<li id=l4><a href="profile.php">Profile</a></li>
		<li id=l5><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}
?>

<?php
if($menu==3)
{
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="admin.php">Covid19App</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li id=l1><a href="upload.php" >Upload Data</a></li>
        <li id=l2><a href="Statistics.php">Statistics</a></li>
		<li id=l3><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}
?>