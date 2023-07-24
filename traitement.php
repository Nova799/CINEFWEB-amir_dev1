<?php
require('./config/conn.php');
require('./functions.php');


if ( isset($_POST['next_finish'])  )
{
    $data_from_formulaire = array();

    foreach($_POST as $data_row)
    {
      $data_row = valid_data($data_row);
      echo $data_row;
      
      array_push($data_from_formulaire,$data_row);
    }

 
    $intitule_formation = $data_from_formulaire[0];
    $nom = $data_from_formulaire[1];
    $entite = $data_from_formulaire[2];
    $missions = $data_from_formulaire[3];
    $formation_prece = $data_from_formulaire[4];
    $formation_detail = $data_from_formulaire[5];
    $demande_perso = $data_from_formulaire[6];
    $difficultes = $data_from_formulaire[7];
    $conseil = $data_from_formulaire[8];
    $objectifs = $data_from_formulaire[9];
    $attentes = $data_from_formulaire[10];
    $autres_priorite = $data_from_formulaire[11];
    $objectif1 = $data_from_formulaire[12];
    $objectif2 = $data_from_formulaire[13];
    $objectif3 = $data_from_formulaire[14];
    // $cas_concrets = $data_from_formulaire[15];
    // $remarques = $data_from_formulaire[16];
    // $telephone = $data_from_formulaire[17];
    // $email = $data_from_formulaire[18];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> CINEF | Formulaire de pre-formation </title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="./assets/img/favicon.ico">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com/" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/table_customize/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/table_customize/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/table_customize/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/table_customize/css/quill.snow.css" rel="stylesheet">
  <link href="assets/table_customize/css/quill.bubble.css" rel="stylesheet">
  <link href="assets/table_customize/css/remixicon.css" rel="stylesheet">
  <link href="assets/table_customize/css/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/table_customize/css/style(1).css" rel="stylesheet">

  <style>
   
   .optionDelete {
     display: none;
     transition: all .4s;
   }

 </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="">

  <main id="main" class="main mx-auto">

    <div class="pagetitle">
      <h1></h1>
      <nav>

      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <center><img src="./assets/img/logo_blanc.png" width='100'></center>
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

              <!-- Table with stripped rows -->
              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-container">
                  <table class="table datatable datatable-table">
                   
                    <tbody>


                      <!DOCTYPE html>
                      <html lang="en">

                      <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>Tableau des informations</title>
                        <style>
                          table {
                            border-collapse: collapse;
                            width: 100%;
                          }

                          th,
                          td {
                            border: 1px solid #ddd;
                            padding: 8px;
                          }

                          tr{
                            width: 50%;
                          }

                          th {
                            background-color: #f2f2f2;
                          }
                        </style>
                      </head>

                      <tbody class="pt-4"> 
                        <h1 class="pt-4">Intitulé de la formation : <span style="color: #ff0000">  <?= $intitule_formation ?> </span> </h1>
                        <h5 class="card-title">Vérification des Informations</h5>
                        <h1></h1>
                        <table>
                          <!-- <tr>
                            <th>Questionnaires</th>
                            <th>Réponses</th>
                          </tr> -->
                          <?php
                          echo "<tr>";
                          echo "<td colspan='2' style='color: red;'><h2><center>Informations Personnelles:</center></h2></td>";

                          echo "</tr>";
                          echo "<tr>";
                          echo "<td class='col-6'>Nom et Prénoms :</td><td>" . $nom . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Entité/Direction/Service :</td><td>" . $entite . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Quelles sont aujourd'hui vos principales missions et activités dans l’entreprise ?</td><td>" . $missions . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td colspan='2' style='color: red;'><h2><center>Informations Professionnelles:</center></h2></td>";
                          echo "</tr>";
                          echo "<td>Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ?</td><td>" . $formation_prece . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Si oui, laquelle et à quelle date ?</td><td>" . $formation_detail . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Avez-vous demandé personnellement à suivre cette formation ?</td><td>" . $demande_perso . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Si oui, quelles difficultés rencontrez-vous pour lesquelles vous souhaitez suivre cette formation ?</td><td>" . $difficultes . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Si non, qui vous a conseillé cette formation ?</td><td>" . $conseil . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td colspan='2' style='color: red;'><h2><center>Informations Complémentaires:</center></h2></td>";
                          echo "</tr>";
                          echo "<td>Suivez-vous cette formation dans l'objectif de prise de poste ou sensibilisation ?</td><td>" . $objectifs . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Qu'attendez-vous en priorité de cette formation ?</td><td>" . $attentes . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Vos Autres priorités:</td><td>" . $autres_priorite . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Quels sont vos trois objectifs opérationnels à atteindre à l'issue de cette formation ?</td><td> <li>" . $objectif1 . "</li><br><li>" . $objectif2 . "</li><br><li>" . $objectif3 . "</li></td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Avez-vous des cas concrets (dossiers) pour lesquels vous souhaiteriez des réponses durant la formation ? Merci de nous les envoyer par mail ou de les amener en formation.</td><td>" . $_POST['cas-concrets'] . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Autres remarques:</td><td>" . $_POST['remarques'] . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Téléphone:</td><td>" . $_POST['telephone']. "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Email:</td><td>" . $_POST['email'] . "</td>";
                          echo "</tr>";

                          ?>
                        </table>


                    </tbody>
                  </table>
                </div>
                <div class="datatable-bottom text-center">
                  <form action="" class="submit-form" method="post" id='html'>
                    
                    <button type="button" id="btn_confi" class="btn-confirm btn btn-success">Confirmer </button>
                    <button type="submit" id="btn_rejet" class="btn btn-danger" name='rejet'><a style="text-decoration: none; color:white" href="./formulairepreformation.php">Annuler</a></button>
                          
                  </form>

                  <form action="" class="pt-3" method="post" id='html'>
                    <a href="./index.php" >
                      <button type="button" id="btn_accueil" class="btn btn-success"> Retour A l'accueil </button>
                    </a>
                  </form>

                  
                </div>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/table_customize/js/apexcharts.min.js"></script>
  <script src="assets/table_customize/js/bootstrap.bundle.min.js"></script>
  <script src="assets/table_customize/js/chart.umd.js"></script>
  <script src="assets/table_customize/js/echarts.min.js"></script>
  <script src="assets/table_customize/js/quill.min.js"></script>
  <script src="assets/table_customize/js/simple-datatables.js"></script>
  <script src="assets/table_customize/js/tinymce.min.js"></script>
  <script src="assets/table_customize/js/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/table_customize/js/main.js"></script>
  <script src="assets/jquery-3.2.1.min.js"></script>

  

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script>
  <script>

    $('.btn-confirm').click(function() {
      $.ajax({
        type: "POST",
        url: "functions.php",
        data: { data_from_formulaire: <?php echo json_encode($data_from_formulaire)  ?> }
      }).done(function( msg ) {
        alert( "Donnee enregistree avec succees " + msg );
        
              document.getElementById('btn_confi').className = 'optionDelete';
              document.getElementById('btn_rejet').className = 'optionDelete';
       
              document.getElementById('btn_accueil').classList.remove = 'optionDelete';
 
        });
    });
  
    if (window.self == window.top) {
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-P7JSYB1CSP');
    }
  </script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7e270bf5cba64899&quot;,&quot;token&quot;:&quot;68c5ca450bae485a842ff76066d69420&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>


  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>

</body>

<?php }

else {

  echo ("Une erreur s'est produite ");
  
}

?>

</html>