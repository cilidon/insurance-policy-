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

require 'db.php';
	$sql = "select * from clientlog where uname='$un;'";
  $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if ($row['uname']==$un){
    header("location:signup.php?error=taken");    
        exit();
    }
else{
$hash1 = md5( rand(0,1000) );
$sql = "INSERT INTO clientdetails(uname,fname,lname,email,mobile,dob,city,hash)
values ('$un','$fn','$ln','$em','$mn','$dt','$ct','$hash1')";
$hash = password_hash($pass, PASSWORD_DEFAULT);
$sql2 = "INSERT INTO clientlog(uname,pass) values ('$un','$hash')";
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
      $mail->Body    = '<pre>
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$un.'
------------------------
 
Please click this link to activate your account:
http://localhost/Inscure/verify.php?uname='.$un.'&hash='.$hash1.'
 
</pre>';
  
  
    $mail->send();
	header("location:login.php?reg=success");
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