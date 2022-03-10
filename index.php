<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();


$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.yandex.com.tr';
$mail->Port = 465;

$mail->Username = "";
$mail->Password = "";


$mail->setFrom("");
$mail->addAddress("sinemugurtf@gmail.com");


$mail->isHTML(true);
$mail->Subject = "Gmail SMTP Ornegi";
$mail->Body = "<h1>Merhaba Kadir</h1><p>Bu bir denemedir.</p>";


if ($mail->send())

 
    echo "Mail gonderimi basarili.";
else
    echo "Malesef olmadi.";


?>