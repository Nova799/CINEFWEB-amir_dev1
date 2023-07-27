<?php

    $subject = $_GET["sujet"];
    $message = $_GET["message"];
    $email = $_GET["to"];
    echo "message = ".$message;
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
    $conn = conn();
    if ($email == "all") {
        $res = mysqli_query($conn, "SELECT * FROM newsletters");
    } else if ($email == "confirmed") {
        $res = mysqli_query($conn, "SELECT * FROM newsletters WHERE confirmed = 1");
    } else if ($email == "nconfirmed") {
        $res = mysqli_query($conn, "SELECT * FROM newsletters WHERE confirmed = 0");
    } else {
        $email = "all";
        $res = mysqli_query($conn, "SELECT * FROM newsletters");
    }
    if (mysqli_num_rows($res) > 0) {
        $attachmentFilePath = '';
        while ($row = mysqli_fetch_assoc($res)) {
            $to = $row["email"];
            $nom = $row["nom"];
            $prenom = $row["prenom"];
            if (isset($_FILES["fichier"])) {
                $tmpFilePath = $_FILES["fichier"]["tmp_name"];
                $uploadDir = realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/assets/docs/';
                $filename = $_FILES["fichier"]["name"];
                $attachmentFilePath = $uploadDir . $filename;
                if (move_uploaded_file($tmpFilePath, $attachmentFilePath)) {
                    send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath);
                }
            } else {
                send_mail($to, $nom, $prenom, $subject, $message);
            }
        }
        $sql = "INSERT INTO campagne (dest, sujet, message, fichier) VALUES ('$email', '$subject', '$message', '$attachmentFilePath')";
        mysqli_query($conn, $sql);
    }


?>