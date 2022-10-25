<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from = "jmattz23@hotmail.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Mailer = "smtp";
$mail->Host= "tls://email-smtp.us-east-1.amazonaws.com"; // Amazon SES
$mail->Port = 465;  // SMTP Port
$mail->Username = "AKIAVFEKWWJKOCX3NVOC";  // SMTP  Username
$mail->Password = "BNHBX65+DorQDmmi9T95DCei5oH6KM6M1umgyt4Pht4i";  // SMTP Password
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($from,'9lessons Labs');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);

if(!$mail->Send())
return false;
else
return true;

}
?>