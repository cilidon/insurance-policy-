<?php
$un = filter_input(INPUT_POST, 'uname');
$pass = filter_input(INPUT_POST, 'pass');
require 'db.php';
/*$hash = password_hash($pass, PASSWORD_DEFAULT);
$sql2 = "INSERT INTO adminlog(aname,pass) values ('$un','$hash')";
if ($conn->query($sql2)){
echo "success";}*/
 $sql = "select * from adminlog where aname='$un'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if ( password_verify($pass, $row['pass'])){
        session_start();
        $_SESSION['admin']=$un;
        header("location:adminpage.php");
    }
            else{
       // echo " Incorrect Credentials ";
        header("location:admin.php?error=incorrect");
        exit();
    }