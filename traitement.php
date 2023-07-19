<?php
// Connexion à la base de données
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

$sql = "SELECT * FROM nom_table ORDER BY id DESC LIMIT 1";
if (isset($_GET['id'])) {
  $sql = "SELECT * FROM nom_table WHERE id = ".$_GET['id'];
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Afficher les données
  $row = $result->fetch_assoc();
  $id = $row['id'];
  $formation = $row['formation'];
  $nom = $row['nom'];
  $entite = $row['entite'];
  $missions = $row['missions'];
  $formation_precedente = $row['formation_precedente'];
  $formation_details = $row['formation_details'];
  $demande_personnelle = $row['demande_personnelle'];
  $difficultes = $row['difficultes'];
  $conseil = $row['conseil'];
  $objectifs = $row['objectifs'];
  $attentes = $row['attentes'];
  $autres_priorites = $row['autres_priorites'];
  $objectif1 = $row['objectif1'];
  $objectif2 = $row['objectif2'];
  $objectif3 = $row['objectif3'];
  $cas_concrets = $row['cas_concrets'];
  $remarques = $row['remarques'];
  $telephone = $row['telephone'];
  $email = $row['email'];
} else {
  echo "Aucune donnée trouvée.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com/" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/bootstrap.min.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/bootstrap-icons.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/boxicons.min.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/quill.snow.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/quill.bubble.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/remixicon.css" rel="stylesheet">
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./Tables _ Data - NiceAdmin Bootstrap Template_files/style(1).css" rel="stylesheet">

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
      <center><img src="Logo blanc.png " width='100'></center>
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

              <!-- Table with stripped rows -->
              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-container">
                  <table class="table datatable datatable-table">
                    <!-- <thead>
                      <tr>
                        <th data-sortable="true" style="width: 5.654174884944116%;"><a href="tables-data.html#"
                            class="datatable-sorter">#</a></th>
                        <th data-sortable="true" style="width: 28.007889546351084%;"><a href="tables-data.html#"
                            class="datatable-sorter">Name</a></th>
                        <th data-sortable="true" style="width: 37.738330046022355%;"><a href="tables-data.html#"
                            class="datatable-sorter">Position</a></th>
                        <th data-sortable="true" style="width: 9.270216962524655%;"><a href="tables-data.html#"
                            class="datatable-sorter">Age</a></th>
                        <th data-sortable="true" style="width: 19.32938856015779%;"><a href="tables-data.html#"
                            class="datatable-sorter">Start Date</a></th>
                      </tr>
                    </thead> -->
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

                          th {
                            background-color: #f2f2f2;
                          }
                        </style>
                      </head>

                      <body class="pt-4"> 
                        <h1 class="pt-4">Intitulé de la formation : <span style="color: #ff0000">  <?= $formation ?> </span> </h1>
                        <h5 class="card-title">Vérification des Informations</h5>
                        <h1></h1>
                        <table>
                          <tr>
                            <th>Questionnaires</th>
                            <th>Réponses</th>
                          </tr>
                          <?php
                          echo "<tr>";
                          echo "<td colspan='2' style='color: red;'><h2><center>Informations Personnelles:</center></h2></td>";

                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Nom et Prénoms :</td><td>" . $nom . "</td>";
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
                          echo "<td>Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ?</td><td>" . $formation_precedente . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Si oui, laquelle et à quelle date ?</td><td>" . $formation_details . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Avez-vous demandé personnellement à suivre cette formation ?</td><td>" . $demande_personnelle . "</td>";
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
                          echo "<td>Vos Autres priorités:</td><td>" . $autres_priorites . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Quels sont vos trois objectifs opérationnels à atteindre à l'issue de cette formation ?</td><td>" . $objectif1 . "<br>" . $objectif2 . "<br>" . $objectif3 . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Avez-vous des cas concrets (dossiers) pour lesquels vous souhaiteriez des réponses durant la formation ? Merci de nous les envoyer par mail ou de les amener en formation.</td><td>" . $cas_concrets . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Autres remarques:</td><td>" . $remarques . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Téléphone:</td><td>" . $telephone . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Email:</td><td>" . $email . "</td>";
                          echo "</tr>";

                          ?>
                        </table>







                    </tbody>
                  </table>
                </div>
                <div class="datatable-bottom text-center">
                <?php if (!isset($_GET['id'])) { ?>            
                  <form action="" method="post" id='html'>
                    <?php
                    // Connexion à la base de données
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
                    $sql = "SELECT * FROM nom_table ORDER BY id DESC LIMIT 1";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // Afficher les données
                      $row = $result->fetch_assoc();
                      $id = $row['id'];
                    }
                    ?>
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <button type="button" class="btn btn-success" onclick="document.getElementById('html').innerHTML = '<h3>Vos informations ont été envoyées avec succès.</h3>';">Confirmer</button>
                    <button type="submit" class="btn btn-danger" name='rejet'>Annuler</button>
                  </form>
                  <?php }else{
                    ?>
                    <button class='btn btn-success' onclick='window.print()'>Télécharger</button>
                    <?php
                  } ?>
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
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/apexcharts.min.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/bootstrap.bundle.min.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/chart.umd.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/echarts.min.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/quill.min.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/simple-datatables.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/tinymce.min.js"></script>
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./Tables _ Data - NiceAdmin Bootstrap Template_files/main.js"></script>

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script>
  <script>
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

</html>
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if (isset($_POST['rejet']) && isset($_POST['id'])) {
  echo $_POST['id'];
  $sql = "DELETE FROM nom_table WHERE id = " . $_POST['id'];
  $conn->query($sql);
  ?>
  
  <script>
    location.href = location.origin + "/Impact/";
  </script>

  <?php
}

?>