<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="./core.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" crossorigin="anonymous"
    href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2xvY2FsaG9zdC9pbXBhY3QvY29ubmV4aW9uLmh0bWw">
  <style>
    .form-outline .form-control {
      border: 0px solid black !important;
    }
  </style>
</head>

<body>
  <section class="vh-100" style="background-color: #009933;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="./img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 text-black">

                  <form method="post">

                    <div class="/*d-flex*/ align-items-center mb-3 pb-1">
                      <center><img src="logo_cinef.png"></center>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg"
                        style="border-bottom: 1px solid black !important;" name="mail">
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg"
                        style="border-bottom: 1px solid black !important;" name='pass'>
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name='sub'>Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>



                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
<?php

if (isset($_POST['sub']) && isset($_POST['pass']) && isset($_POST['mail']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "formulaire";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
  }

  // Requête SQL pour récupérer les données du formulaire

  $sql = "SELECT * FROM user WHERE email = '".$_POST['mail']."' AND password='".$_POST['pass']."'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['user'] = $result;
  header('Location: /Impact/star-admin2-free-admin-template-main/template/index.php');
}
}

?>