<?php

require 'navbar.php';
$un =$_SESSION['usern'];
if(isset($_SESSION['usern']))
{
if(isset($_GET['v'])){
?>
<br><br><br><br><center><h1 style="color:red;"> Plz verify your account to unlock all the features</h1></center> 
<?php
}
?>

<form  name="myForm" action="logout.php" method="post" autocomplete="off">
<div class="login-box">
  <center><h1>hello <?php echo "$un" ?></h1></center><br><br><br><br><br><br><br><br>
  <input type="button" onclick="location.href='type.php';" class="btn" value="New Application"><br>
  <input type="button" onclick="location.href='mypol.php';" class="btn" value="My Application"><br>
    <input type="button" onclick="location.href='update.php';" class="btn" value="update profile"><br>
  <input type="submit" class="btn" value="Logout"><br>
</div></form>;
<?php
}
else
{
	header("location:login.php?");
}
?>