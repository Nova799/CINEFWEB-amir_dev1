<!DOCTYPE html>
<html lang="en">


<?php 
  if (isset($_GET["id"])) {
    require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/conn.php');
    $conn = conn();
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM nom_table WHERE id = ".$_GET['id']." AND canChange = 1 AND isChanged = 1"));
    if (!$row["id"]) {
      header("Location: /CINEFWEB/");
    }
  } else {
    header("Location: /CINEFWEB/");
  }
?> 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> CINEF | FORMATION PRO ET CONTINUE </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta content="" name="description">
  <meta content="" name="keywords">

    <style>
        body{
          background-color: #ede7f6;
          font-family: 'Poppins', sans-serif;
        }

        .form{
          height: 1100px;
          width: 660px;
          margin: auto;
        }

        .required{
          font-size: 13px;
          color: red;
        }

        .title-div{
          /* height: 150px; */
          width: 660px;
          background-color: #FDFEFE;
          margin: 15px;
          border-radius: 8px;
          border-top: 8px solid #92c0a1;
          padding: 25px;
      }

      .title-div strong {
        color: green;
      }

      .button {
        display: none;
      }

      .name-div, .college-div, .gmail-div, .mobile-div{
          height: 150px;
          width: 660px;
          background-color: #FDFEFE;
          margin: 15px;
          border-radius: 8px;
      }

      .gmail-div-option{
          width: 660px;
          background-color: #FDFEFE;
          margin: 15px;
          border-radius: 8px;
      }

      .name {
        padding: 20px 0 25px 25px;
        font-size: 15px;
      }

      .input-div {
        padding-top: 25px;
        padding-left: 25px;
      }

      .input-div input{
        width: 300px;
        border: 0;
        outline: 0;
        border-bottom: 1.5px solid #DCD7D7;
      } 

      /* .btn {
        height: 36px;
        width: 100px;
        background-color: #6703c4;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing: .5px;
        font-weight: 540;
        border: none;
        padding: 10px;
        position: absolute;
        margin: 15px;
        color: white;
      } */

      .last-div h2{
        text-align: center;
        padding-top: 30px;
        color: #a2a4a6 ;
        font-weight: 600 ; 
      }

      .term{
        font-size: 12px;
        padding-left: 65px;
        padding-top: 5px;
        position: absolute;
      }

      .never {
        padding-left: 15px;
        font-size: 12px;
        padding-top: 10px;
        /* padding-top: 70px; */
        font-weight: 400;
      }


    </style>

</head>

<body>


  <main id="main">

    <div class="form">

      <div class="title-div">
          <h3 class="title"> Attentes du participant : <strong> <?= $row["nom"] ?> </strong> </h3>
          <p>Intitule de la formation : <strong> <?= $row["formation"] . " | " . $row["entite"] ?></strong> </p>
          <input type="hidden" value="<?= $row["id"] ?>" name="id">
      </div>

      <div class="name-div">
        <div class="name">Principales missions et activités dans l’entreprise <span class="required">*</span> </div>
        <div class="input-div">
          <input type="input" name="missions" placeholder="Votre réponse" value="<?= $row["missions"] ?>">
        </div>
      </div>
      
      <div class="college-div">
        <div class="name">Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ? <span class="required">*</span> <strong> <?php if ($row["formation_precedente"] == "oui"): ?>[ Oui ]<?php else: ?>[ Non ]<?php endif?></strong> </div>
        <div class="input-div">
          <input type="input" name="formation_details" placeholder="Your answwer for college name" value="<?= $row['formation_details'] ?>">
        </div>
      </div>
      
      <div class="gmail-div-option">
        <div class="name"> Avez-vous demandé personnellement à suivre cette formation <span class="required">*</span> <strong>  <?php if ($row["demande_personnelle"] == "oui"): ?>[ Oui ]<?php else: ?>[ Non ]<?php endif?></strong> </div>
        <!-- <div class="input-div">
          <input type="input" name="answer" placeholder="Your email" value="">
        </div> -->
      </div>
      

      <div class="gmail-div-option">
        <div class="name"> Suivez-vous cette formation dans l'objectif de prise de poste ou sensibilisation ? <strong>  <?php if ($row["objectifs"] == "oui"): ?>[ Oui ]<?php else: ?>[ Non ]<?php endif?></strong> </div>
        
      </div>

      <div class="mobile-div">
        <div class="name">Qu'attendez-vous en priorité de cette formation ? <span class="required">*</span> </div>
        <div class="input-div">
          <input type="input" name="attentes" placeholder="Your answwer" value="<?= $row['attentes'] ? $row['attentes'] : 'Vide' ?>">
        </div>
      </div>

      <div class="mobile-div">
        <div class="name"> Vos autres priorites <span class="required">*</span>  </div>
        <div class="input-div">
          <input type="input" name="autres_priorites" placeholder="Your answwer" value="<?= $row['autres_priorites'] ?>">
        </div>
      </div>

      

      <div class="mobile-div">
        <div class="name"> Vos trois objectifs opérationnels à atteindre à l'issue de cette formation <span class="required">*</span>  </div>
        <div class="input-div">
          <input type="input" name="objectif1" placeholder="Your answwer" value="<?= $row['objectif1'] ?>">
          <input type="input" name="objectif2" placeholder="Your answwer" value="<?= $row['objectif2'] ?>">
          <input type="input" name="objectif3" placeholder="Your answwer" value="<?= $row['objectif3'] ?>">
        </div>
      </div>

  
      <div class="last-div">
        <p class="never text-center">
          <button class="btn btn-secondary float-start">Télécharger</button>
          <button class="btn btn-success float-end" id="btn">Enregistrer</button>
        </p>
        <p class="term d-none"> This content is neither created nor endorsed by google, Report abuse - Term of service </p>
        <h2>CINEF - SAS</h2>
      </div>
            


    </div>
  
  </main><!-- End #main -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
    document.querySelector("#btn").onclick = function () {
      data = {};
      for (let elem of document.getElementsByTagName("input")) {
        data[elem.name] = elem.value;
      }
      $.ajax({
        url: "modif_T.php",
        type: "GET",
        data: data,
        success: function (data) {
          alert("La modifiction a été un succès");
          if ($_SESSION["user"]) {
            window.close()
          }
          location.href = ".";
        }
      })
    }
  </script>


</body>
</html>

