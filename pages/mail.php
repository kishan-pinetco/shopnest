<?php
    include "../include/connect.php";

    use phpmailer\PHPMailer\PHPMailer;
    use phpmailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $mail->Username = "mottacompany09@gmail.com";
    $mail->Password = "leca ujns huhb zejz";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('mottacompany09@gmail.com');
?>