<head>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor=#444>
<?php
session_start();
$un =$_SESSION['usern'];
if(isset($_SESSION['usern']))
{
?>
<form  name="myForm" action="outp.php" method="post" autocomplete="off">
<div class="login-box">
  <h1>hello <?php echo "$un" ?></h1><br><br><br><br>
  <input type="button" onclick="location.href='type.php';" class="btn" value="New Application"><br>
  <input type="button" onclick="location.href='mypol.php';" class="btn" value="My Application"><br>
  <input type="submit" class="btn" value="Logout"><br>
</div></div></form>;
<?php
}
else
{
	header("location:login.php?");
}
?>