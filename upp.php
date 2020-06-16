<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$un = filter_input(INPUT_POST, 'un');
$fn= filter_input(INPUT_POST, 'fn');
$ln = filter_input(INPUT_POST, 'ln');
$em = filter_input(INPUT_POST, 'em');
$mn = filter_input(INPUT_POST, 'mn');
$dt = filter_input(INPUT_POST, 'dt');
$ct = filter_input(INPUT_POST, 'ct');
$pass = filter_input(INPUT_POST, 'p1');
$pass1 = filter_input(INPUT_POST, 'p3');
require 'db.php';
	$sql = "select * from clientlog where uname='$un'";
  $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if (!password_verify($pass1, $row['pass'])){
    header("location:update.php?error=wrong");    
        exit();
    }


else{
$sql = "update clientdetails set fname = '$fn', lname = '$ln',email = '$em', mobile='$mn', dob='$dt', city='$ct' where uname='$un'";
$hash = password_hash($pass, PASSWORD_DEFAULT);
$sql2 = "UPDATE  clientlog SET pass ='$hash' where uname='$un'";
if ($conn->query($sql)){
if ($conn->query($sql2)){
	require '../mailer/vendor/autoload.php';
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.sendgrid.net' ;                   // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'apikey';                     // SMTP username
      $mail->Password   = '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';                               // SMTP password
      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
  
      //Recipients
      $mail->setFrom('info@inscure.com');
      $mail->addAddress($em);     // Add a recipient
     
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
	  $mail->Subject = 'Signup | Verification';
      $mail->Body    = 'updation successful';
  
  
    $mail->send();
	header("location:afterlogin.php?up=success");
}  catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
}
else{
echo "Error: ". $sql2 ."
". $conn->error;
}

$conn->close();
}
?>