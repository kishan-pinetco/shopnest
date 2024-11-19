<?php
include "../include/connect.php";

use phpmailer\PHPMailer\PHPMailer;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "sandbox.smtp.mailtrap.io";
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = "a1f3c623d8e031";
$mail->Password = '905bafb5957765';
$mail->setFrom('kishan@gmail.com');
?>