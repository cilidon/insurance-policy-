<?php
require 'navbar.php';
$un=$_SESSION['usern'];
require 'db.php';
$sql = "SELECT verify from clientdetails where uname = '$un'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
if($row['verify']==0){
	header("location:afterlogin.php?v=n");
}
?>
<div class="login-box">
  <h1 id = "hehe">Please Select type of policy</h1>
	<input type="button"  onclick="location.href='error.php';"class="btn" value="LIFE"><br>
	<input type="button"  onclick="location.href='carapp.php';"class="btn" value="CAR"><br>
	<input type="button"  onclick="location.href='error.php';"class="btn" value="2 Wheeler">
	
</div>

</body>