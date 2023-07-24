<?php

require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/autoload.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/Exception.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath = null){
    $message = "Cher/Chère $nom $prenom, <br> $message";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kouakanou.casanova@pigierbenin.com';
        $mail->Password = 'J05f2+004';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8'; 

        $mail->setFrom('kouakanou.casanova@pigierbenin.com', 'Expéditeur');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Check if attachment file path is provided and attach the file
        if ($attachmentFilePath !== null && file_exists($attachmentFilePath)) {
            $mail->addAttachment($attachmentFilePath);
        }

        $mail->send();
        return true;
    } catch (Exception $e) {
        // echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        return false;
    }
}
?>
