<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard | Newsletter</title>
  <!-- plugins:css -->

  <?php include('layout_link_css.php') ?>

  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=_3BF8PUqUVohERPNPkGUfKJpZrVZd9K0cZyxwFhlgM2fFN45TE00xXrQoOjUQJRhNso0Zy4TIEkBJ-o_fo-Ov5Ej7S70DRwykxJs9VYja4M" charset="UTF-8"></script>
  <link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2xvY2FsaG9zdC9pbXBhY3QvZGFzaGJvYXJkL3RlbXBsYXRlL25ld3NsZXR0ZXIucGhw" />

</head>

<body class="sidebar-dark">
  <div class="container-scroller">

    <?php include('header_top.php') ?>

    <div class="container-fluid page-body-wrapper pt-0">
      <!-- partial:partials/_settings-panel.html -->
      <?php include_once('header_left.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                    <div class="row">

                      <div class="content-wrapper">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="home-tab">



                              <!-- <button id="call" name="searchInput">
                  envoer
                </button> -->
                              <h4 class=""> Liste des Personnes s'ayant abonne </h4>


                              <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                  <ul id="resultsList"></ul>


                                  <div class="row">
                                    <div class="col-lg-12">


                                      <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                          <div class="card card-rounded">
                                            <div class="card-body">
                                              <div class="d-sm-flex justify-content-between align-items-start">


                                              </div>
                                              <div class="table-responsive  mt-1">
                                                <table class="table select-table">
                                                  <thead>
                                                    <tr>
                                                      <th>
                                                        N°
                                                      </th>
                                                      <th>Nom</th>
                                                      <th>Prenom (s)</th>
                                                      <th>Email</th>
                                                      <th>Phone</th>
                                                      <th>Actions</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody id='body'>
                                                    <?php
                                                    // Établir une connexion à la base de données
                                                    $conn = mysqli_connect("localhost", "root", "", "formulaire");

                                                    // Vérifier la connexion
                                                    if (!$conn) {
                                                      die("Erreur de connexion à la base de données: " . mysqli_connect_error());
                                                    }

                                                    // Récupérer les informations de base de données
                                                    if (!isset($_GET['page']) || $_GET['page'] == 0) {
                                                      $query = "SELECT nom, prenom, email, phone, id FROM newsletters ORDER BY id DESC LIMIT 10";
                                                    } else {
                                                      $query = "SELECT nom, prenom, email, phone, id FROM newsletters ORDER BY id DESC LIMIT " . intval($_GET['page']) * 10 . ", " . intval($_GET['page']) * 20;
                                                    }
                                                    $result = mysqli_query($conn, $query);

                                                    // Vérifier si des résultats ont été trouvés
                                                    if (mysqli_num_rows($result) > 0) {
                                                      $nbr = 0;
                                                      // Afficher les données dans le tableau de bord
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                        $nbr++;
                                                    ?>
                                                        <tr>
                                                          <td>
                                                            <div class="d-flex">
                                                              <div>
                                                                <h6>
                                                                  <?= $nbr ?>
                                                                </h6>
                                                              </div>
                                                            </div>
                                                          <td>
                                                            <div class="d-flex">
                                                              <div>
                                                                <h6>
                                                                  <?= $row["nom"] ?>
                                                                </h6>
                                                              </div>
                                                            </div>
                                                          </td>
                                                          <td>
                                                            <h6>
                                                              <?= $row["prenom"] ?>
                                                            </h6>
                                                          </td>
                                                          <td>
                                                            <h6>
                                                              <?= $row["email"] ?>
                                                            </h6>
                                                          </td>
                                                          <td>
                                                            <h6>
                                                              <?= $row["phone"] ?>
                                                            </h6>
                                                          </td>
                                                          <td class='text-center pointer d-flex'>
                                                            <a href="actionNewsletter.php?id=<?= $row["id"] ?>" class='text-secondary' target='_blank'>
                                                              <h2 class="mdi mdi-send"></h2>
                                                            </a>
                                                            <!-- <div class="badge badge-opacity-success">Completed</div> -->
                                                          </td>
                                                        </tr>

                                                    <?php
                                                        /* echo '<tr>';
                                                            echo '<td>' . $row['formation'] . '</td>';
                                                            echo '<td>' . $row['nom'] . '</td>';
                                                            echo '<td>' . $row['entite'] . '</td>';
                                                            echo '<td>' . $row['missions'] . '</td>';
                                                            echo '<td>';
                                                            echo '<button onclick="voirDetails(\'' . $row['formation'] . '\', \'' . $row['nom'] . '\', \'' . $row['entite'] . '\', \'' . $row['missions'] . '\')">Voir</button>';
                                                            echo '</td>';
                                                            echo '</tr>'; */
                                                      }
                                                    } else {
                                                      echo '<tr><td colspan="5">Aucune donnée disponible</td></tr>';
                                                    }

                                                    // Fermer la connexion à la base de données
                                                    mysqli_close($conn);
                                                    ?>
                                                    <tr>
                                                      <td colspan="5">
                                                        <a class='btn btn-secondary float-start' href='?page=<?php if (isset($_GET['page'])) {
                                                                                                                echo "" . (intval($_GET['page']) - 1) . "";
                                                                                                              } else {
                                                                                                                echo '0';
                                                                                                              } ?>'>Pr&eacute;c&eacute;dent</a>
                                                        <a class='btn btn-primary text-white float-end' href='?page=<?php if (isset($_GET['page'])) {
                                                                                                                      echo "" . (intval($_GET['page']) + 1) . "";
                                                                                                                    } else {
                                                                                                                      echo '1';
                                                                                                                    } ?>'>Suivant</a>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                </table>
                                              </div>
                                            </div>
                                          </div>
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

    <!-- plugins:js -->
    <?php include_once('layout_link_js.php') ?>

    <script>
      $(function($) {
        $('input#searchInput').on({
          'input': function() {
            $.ajax({
              url: '/Impact/info.php?q=' + $('#searchInput').val(),
              type: 'GET',
              success: function(data) {
                var result = JSON.parse(data);
                $('#body').html('');
                var nbr = 0;
                if (result['empty']) {
                  $('#body').html('<tr>\
                <td colspan="5" class="text-center">\
                ' + result['empty'] + '\
                </td>\
                </tr>')
                } else {
                  for (var x of result['data']) {
                    nbr += 1;
                    $('#body').append('<tr>\
                                        <td>\
                                          <div class="d-flex">\
                                            <div>\
                                              <h6>' + nbr + '</h6>\
                                            </div>\
                                          </div>\
                                        <td>\
                                          <div class="d-flex">\
                                            <div>\
                                              <h6>' + x["formation"] + '</h6>\
                                            </div>\
                                          </div>\
                                        </td>\
                                        <td>\
                                          <h6>' + x["nom"] + '</h6>\
                                        </td>\
                                        <td>\
                                          <h6>' + x["entite"] + '</h6>\
                                        </td>\
                                        <td class="text-center pointer">\
                                          <a href="../../traitement.php?id=' + x["id"] + '" class="text-secondary" target="_blank"><h2 class="mdi mdi-eye"></h2></a>\
                                        </td>\
                                      </tr>')
                  }
                }
              }
            })
          }
        })
      })(jQuery)
    </script>

  </div>
</body>

</html>