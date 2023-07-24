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
  <title>Dashboard | Mail Sender</title>

  <?php include('layout_link_css.php') ?>

</head>

<body class="sidebar-dark">
  <div class="container-scroller">

    <?php include('header_top.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-0">
      <!-- partial:partials/_settings-panel.html -->
      
      <?php include_once('header_left.php') ?>
      <?php 
      
      function getEmail($id){
        $conn = mysqli_connect("localhost", "terry", "0156", "formulaire");
        $res = mysqli_query($conn, "SELECT * FROM newsletters WHERE id = $id");
        return mysqli_fetch_assoc($res);
      }
      
      ?>
      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="col-md-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Envoi de mail</h4>
                    <p class="card-description">
                      Renseignez les informations du message
                    </p>
                    <form class="forms-sample" method='POST'>
                      <div class="form-group">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="exampleInputUsername1">From</label>
                              <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Expediteur" name='expediteur' value="noreply@example.com" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="exampleInputEmail1">To</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Destinataire" name='to' <?php if (isset($_GET["id"])){ ?> value="<?= getEmail($_GET["id"])["email"] ?>" readonly<?php } ?>>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Sujet</label>
                          <input type="code" class="form-control" id="exampleInputEmail1" placeholder="Sujet" name='sujet'>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputPassword1">Message</label>
                          <textarea name="message" id="descr" cols="30" rows="10" placeholder='Description de la message' class='form-control' style="height: auto !important;"></textarea>
                        </div>
                        <!-- <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Administrate
                      <i class="input-helper"></i></label>
                    </div> -->
                        <button type="reset" class="btn btn-light">Annuler</button>
                        <button type="submit" class="btn btn-success me-2" name='submit'>Envoyer</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">

              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF SAS. Copyright © 2021. All rights
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $to = $_POST['to'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];

  $conn = mysqli_connect("localhost", "terry", "0156", "formulaire");

  // Vérifier la connexion
  if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
  }

  // Récupérer les informations de base de données
  include("sender.php");

  send_mail($to, $sujet, getEmail($_GET["id"])["nom"], getEmail($_GET["id"])["prenom"], $message);
}

?>