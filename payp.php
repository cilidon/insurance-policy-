<?php
$id=$_GET['id'];
require 'db.php';
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
//echo $date,$id;
$sql = "UPDATE clientpol set pay = 1 WHERE pid='$id'"; 
$sql2 = "UPDATE clientpol set dop = '$date' WHERE pid='$id'";
if(mysqli_query($conn,$sql)){
	if(mysqli_query($conn,$sql2)){
  echo "<center><h1>Payment Successful</h1></center>";

  header( "Refresh:2; url=mypol.php", true, 303);
  exit;
} 
  else{
echo "Error: ". $sql2 ."
". $conn->error;
}
}
else{
echo "Error: ". $sql ."
". $conn->error;
}