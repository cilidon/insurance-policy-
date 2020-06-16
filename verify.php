<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'db.php';
if(!isset($_GET['uname']) && !isset($_GET['hash']))
{
	echo "Invalid approch";
}
else {
$un =$_GET['uname'];
$sql = "SELECT hash, email from clientdetails where uname = '$un' and verify = 0 limit 1 ";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
if($row['hash']==$_GET['hash'])
{
	$sql1 = "update clientdetails set verify = 1 where uname = '$un' and verify = 0";
	$res = mysqli_query($conn,$sql1);
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
      $mail->addAddress($row['email']);     // Add a recipient
     
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
	  $mail->Subject = 'Verification';
      $mail->Body    = 'Verification completed <b>sucessfully<b>';
  
  
    $mail->send();
	echo"Successful";
}  catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
else{
	echo "invalid verification link or verification already completed";
}
}