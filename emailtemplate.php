<?php

function Send_Mail($to,$subject,$body,$tajuk,$image)
{
require 'class.phpmailer.php';
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

//$body = file_get_contents('emailcontent.php');

$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com';    
$mail->SMTPAuth = true;
$mail->Username = 'ifa@digitalgaia.com';
$mail->Password = 'ifasazuani89';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; 

$mail->From = 'ifa@digitalgaia.com';
$mail->FromName = 'Ifa';
$mail->AddReplyTo('iifasazuani@egmail.com');
$address = $to;
$mail->AddAddress($address, $to);
//$mail->addAddress('iifasazuani@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Laporan Kerosakan : '.$tajuk;
$mail->MsgHTML($body);

//$imagename = basename($path);
//$cid=$imagename;

//$mail->AddEmbeddedImage($path,$cid); 
$mail->AddAttachment($image);
//$mail->Body    = 'This is SMTP Email Test';
$mail->send();
//if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
 //} else {
    //echo 'Message has been sent';
//}

}
?>

