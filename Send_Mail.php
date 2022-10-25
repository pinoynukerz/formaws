<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from = "jmattz23@hotmail.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Mailer = "smtp";
$mail->Host= "tls://smtp.gmail.com"; // Amazon SES
$mail->Port = 465;  // SMTP Port
$mail->Username = "";  // SMTP  Username
$mail->Password = "";  // SMTP Password
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
