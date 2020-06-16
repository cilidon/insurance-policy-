<?php
$uname = filter_input(INPUT_POST, 'uname');
$pass = filter_input(INPUT_POST, 'pass');

require 'db.php';
    $sql = "select * from clientlog where uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if ($row['uname']==$uname && password_verify($pass, $row['pass'])){
        //echo " You Have Successfully Logged in";
        session_start();
        $_SESSION['usern']=$row['uname'];
        header("location:index.php?log=success");
        exit();
    }
    else{
       // echo " Incorrect Credentials ";
        header("location:login.php?error=incorrect");
        exit();
    }   
?>