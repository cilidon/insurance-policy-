<?php
session_start();
require 'db.php';
$cln = filter_input(INPUT_POST, 'cln');
$yom = filter_input(INPUT_POST, 'yom');
$manu = filter_input(INPUT_POST, 'manu');
$term = filter_input(INPUT_POST, 'term');
$price = $term * 2500;
$un = $_SESSION['usern'];
$sql = "INSERT INTO clientpol(licno,yearm,manu,uname,price,term,type)
values ('$cln','$yom','$manu','$un','$price','$term','car')";
if ($conn->query($sql)){
	echo '<script> alert("request sent")</script>';
	header("location:afterlogin.php?app=success");
}
else {
	echo "Error: ". $sql ."
	". $conn->error;
}