<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../connexion.php");
} else {
    if ($_SESSION["user"]["role"] != "admin") {
        header("Location: ../connexion.php");
    }
}
?>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Admin</title>

    <?php include_once('layout_link_css.php') ?>

</head>

<body class="sidebar-dark">
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <?php include('header_top.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper pt-0">

            <?php include_once('header_left.php') ?>
            <!-- partial -->

            <div class="main-panel">

                <div class="content-wrapper">

                    <!-- content-wrapper start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">

                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview">

                                        <div class="row">
                                        </div>

                                        <div class="row">

                                            <div class="content-wrapper">

                                                <div class="row">
                                                    <div class="col-md-6 rounded p-3 bg-light mx-auto">
                                                        <h3>
                                                            Message de la campagne
                                                        </h3>
                                                        <br><br>
                                                        <form class="forms-sample" method='POST'
                                                            enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="exampleInputUsername1">From</label>
                                                                            <input type="email" class="form-control"
                                                                                id="exampleInputUsername1"
                                                                                placeholder="Expediteur"
                                                                                name='expediteur'
                                                                                value="noreply@example.com" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">To</label>
                                                                            <!-- <input type="email" class="form-control"
                                                                                id="exampleInputEmail1"
                                                                                placeholder="Destinataire" name='to'
                                                                                value="Tout le monde" readonly> -->
                                                                            <select name="to" id=""
                                                                                class="form-control">
                                                                                <option value="all">Tout le monde
                                                                                </option>
                                                                                <option value="confirmed">Abonnés
                                                                                    confirmés</option>
                                                                                <option value="nconfirmed">Abonnés non
                                                                                    confirmées</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Sujet de la
                                                                        campagne</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="Sujet"
                                                                        name='sujet' required>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Message de
                                                                        campagne</label>
                                                                    <textarea name="message" id="descr" cols="30"
                                                                        rows="10"
                                                                        placeholder='Description de la message'
                                                                        class='form-control'
                                                                        style="height: auto !important;"
                                                                        required></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Joindre un
                                                                        fichier</label>
                                                                    <input type="file" class="form-control"
                                                                        style="height: auto;" placeholder="Sujet"
                                                                        name='fichier' accept=".png, .pdf, .jpg, .docx">
                                                                </div>
                                                                <button type="reset"
                                                                    class="btn btn-light">Annuler</button>
                                                                <button type="submit" class="btn btn-success me-2"
                                                                    name='submit'>Envoyer</button>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">

                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF
                                SAS. Copyright © 2021. All rights
                                reserved.</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <?php include('layout_link_js.php') ?>

</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["sujet"];
    $message = $_POST["message"];
    $email = $_POST["to"];
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
    $conn = conn();
    if ($email == "all") {
        $res = mysqli_query($conn, "SELECT * FROM newsletters");
    } else if ($email == "confirmed") {
        $res = mysqli_query($conn, "SELECT * FROM newsletters WHERE confirmed = 1");
    } else {
        $res = mysqli_query($conn, "SELECT * FROM newsletters WHERE confirmed = 0");
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
}

?>