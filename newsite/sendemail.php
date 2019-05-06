<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$error = false; 
$sent = false;


error_reporting(E_ALL);
ini_set('display_errors', 1);

 
if(isset($_POST['name'])) { 

  // validation expected data exists
  if(!isset($_POST['name']) ||
      !isset($_POST['email']) ||
      !isset($_POST['comments'])) {
            $error = true;
  } else {
      
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Server settings
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'amsmeteors@gmail.com';                     // SMTP username
    $mail->Password   = '$p@c31$c00l!';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('amsmeteors@gmail.com', 'FROM STARLIGHT FARM');
    $mail->addAddress('mikehankey@gmail.com', 'Mike Hankey');     // Add a recipient
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode(array('msg'=>'Message has been sent','success'=>1));
} catch (Exception $e) {
    echo json_encode(array('msg'=>$mail->ErrorInfo, 'success'=>0));
}
 
  }
}
?>
