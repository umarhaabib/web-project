<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include '../db.php';
$selectAttachment = "SELECT * FROM `announcements` WHERE `id` IN ('".$_POST['ids']."')";
$resultAttachment = mysqli_query($db, $selectAttachment);
if (mysqli_num_rows($resultAttachment) > 0) {
    $selectAllUsers = "SELECT * FROM users where consent_to_recieve_emails = 'Yes'";
$result = mysqli_query($db, $selectAllUsers);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $email = $row['email'];
    }
}
    while ($row = mysqli_fetch_assoc($resultAttachment)) {
        $attachment = $row['attachment'];
        $attachment = "../public/attachments/".$attachment;
        $subject = $row['subject'];

       
require '../public/vendor/autoload.php';
$to_email = $email;
$mail = new PHPMailer(false);
//Server settings
$mail->SMTPDebug = false;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'caveoclient.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'test@caveoclient.com';                     //SMTP username
$mail->Password   = '}Y,Hd}Bo#r]%';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;



$mail->setFrom('oucw@gmail.com',  'OUCW');
$mail->addAddress($to_email, 'Mailer');
$mail->isHTML(true);                                  //Set email format to HTML
$mail->addAttachment($attachment);         //Add attachments

$subject = "You have a new announcement";
$mail->Subject = $subject;

$txt = '<html>' .
  '<head>' .
  '<title>' . $subject . '</title>' .
  '</head>' .
  '<body>' .
  '<h1>' . $subject . '</h1>' .
  '<p>Web Application Project has contacted you.</p>' .
  '</body>' .
  '</html>';
$mail->Body    = $txt;
$mail->send();

if (false) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $updateStatus = "UPDATE announcements SET status = 'sent' WHERE `id` IN ('".$_POST['ids']."')";
    $result = mysqli_query($db, $updateStatus);
   if($result){
    echo 'Announcemnt has been sent';

  
}
}
    }
}