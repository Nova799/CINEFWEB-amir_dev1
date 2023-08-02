<?php

require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/autoload.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/Exception.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath = null){
    if ($nom != "" && $prenom != "") {
        $message = "Cher/Chère $nom $prenom, <br> $message";
    }

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

        $mail->setFrom('kouakanou.casanova@pigierbenin.com', 'CINEF SAS Formation');
        $mail->addAddress($to);
        $mail->AddReplyTo('info@cinef-bj.com', 'CINEF SAS');

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
        echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        // return false;
    }
}

function send_mail_at($to, $nom, $prenom, $subject, $message, $attachmentFilePath = null, $date, $heure){
    // Date et heure d'envoi souhaitées
    $envoi = strtotime("$date $heure");

    // Temps actuel
    $maintenant = time();

    // Calcul du délai en secondes jusqu'à l'heure d'envoi
    $delai = $envoi - $maintenant;

    // Vérification pour s'assurer que le délai est positif (sinon, l'heure d'envoi est déjà passée)
    if ($delai <= 0) {
        return false;
    }

    // Attendre jusqu'à l'heure d'envoi
    sleep($delai);

    // Appeler la fonction send_mail pour envoyer l'e-mail à l'heure programmée
    return send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath);
}
/*
$date_envoi = '2023-07-26';
$heure_envoi = '11:54:00';

// Appel de la fonction pour programmer l'envoi de l'e-mail
if (send_mail_at('casanovakouakanou@gmail.com', 'John', 'Doe', 'Sujet de l\'e-mail', 'Contenu de l\'e-mail.', null, $date_envoi, $heure_envoi)) {
    echo "L'e-mail a été programmé pour être envoyé le $date_envoi à $heure_envoi.";
} else {
    echo "Erreur lors de la programmation de l'envoi de l'e-mail.";
}
*/
?>
