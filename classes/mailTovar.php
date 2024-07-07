<?php
$email = $_POST["email"];

require '.././vendor/autoload.php';
include('.././conf.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '.././vendor/phpmailer/phpmailer/src/SMTP.php';

$body = "<h1>Новая заявка Citadel</h1>\n
Email: $email\n";

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $mail_settings_prod['host'];
        $mail->SMTPAuth = $mail_settings_prod['auth'];
        $mail->Username = $mail_settings_prod['username'];
        $mail->Password = $mail_settings_prod['password'];
        $mail->SMTPSecure = $mail_settings_prod['secure'];
        $mail->Port = $mail_settings_prod['port'];
        $mail->CharSet = $mail_settings_prod['charset'];

        $mail->setFrom($mail_settings_prod['from'], $mail_settings_prod['name']);
        $mail->addAddress("kautdi@gmail.com");
        
        $mail->isHTML($mail_settings_prod['is_html']);
        $mail->Subject = "";
        $mail->Body = $body;
        

        return $mail->send();
   
    }
    catch (\PHPMailer\PHPMailer\Exception $e) {
        return false;
    }finally{
         
    }

//В переменную $token нужно вставить токен, который нам прислал @botFather


?>