<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'db.php';
$id=$_GET['id'];
if($_GET['s']=='a')
{
    echo "$id";
$sql="UPDATE clientpol set status = 1 WHERE pid='$id'";
if(mysqli_query($conn,$sql)){
  echo "hehe";
   $sql2= "SELECT email from clientdetails where uname =(select uname from clientpol where pid='$id')";
  $result =  mysqli_query($conn,$sql2);
  $row = mysqli_fetch_array($result);
  $mailid= $row['email'];

 // Load Composer's autoloader
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
      $mail->addAddress($mailid);     // Add a recipient
     
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Policy accepted';
      $mail->Body    = 'Your request has been accepted  <b>Sucessfully</b>';
  
  
      $mail->send();
      header("location:adminpage.php#offers");
      //echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

}

else{
    $sql="update booking set status = 2 WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        header("location:adminpage.php#offers");
    } 
}
