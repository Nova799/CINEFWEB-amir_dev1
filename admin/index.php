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
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">

                          <div class='bg-success text-light p-4 rounded'>
                            <?php include('../config/conn.php');
                            $conn = conn(); ?>
                            <p class="statistics-title text-light">Total des utilisateurs</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM user");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?></h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                          </div>
                          <div class='bg-success text-light p-4 rounded'>
                            <p class="statistics-title text-light">Total de souscription au newsletter</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM newsletters");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                            <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> -->
                          </div>
                          <div class='bg-success text-light p-4 rounded'>
                            <p class="statistics-title text-light">Total de formation offertes</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM formation");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                          </div>
                          <div class="d-none d-md-block bg-success text-light p-4 rounded">
                            <p class="statistics-title text-light">Total de formulaires re&ccedil;us</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM nom_table");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="content-wrapper">

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="home-tab">

                              <input type="search" id="searchInput" placeholder="Recherche..." class='form-control form-control-sm'>

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
                                                      <th>Formation</th>
                                                      <th>Nom & prénom (s)</th>
                                                      <th>Entité</th>
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
                                                      $query = "SELECT formation, nom, entite, id FROM nom_table ORDER BY id DESC LIMIT 10";
                                                    } else {
                                                      $query = "SELECT formation, nom, entite, id FROM nom_table ORDER BY id DESC LIMIT " . intval($_GET['page']) * 10 . ", " . intval($_GET['page']) * 20;
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
                                                                <h6><?= $nbr ?></h6>
                                                              </div>
                                                            </div>
                                                          <td>
                                                            <div class="d-flex">
                                                              <div>
                                                                <h6><?= $row["formation"] ?></h6>
                                                              </div>
                                                            </div>
                                                          </td>
                                                          <td>
                                                            <h6><?= $row["nom"] ?></h6>
                                                          </td>
                                                          <td>
                                                            <h6><?= $row["entite"] ?></h6>
                                                          </td>
                                                          <td class='text-center pointer d-flex'>
                                                            <a href="../traitement.php?id=<?= $row["id"] ?>" class='text-secondary' target='_blank'>
                                                              <h2 class="mdi mdi-eye"></h2>
                                                            </a>
                                                            <a href="../traitement.php?id=<?= $row["id"] ?>" class='text-secondary' target='_blank'>
                                                              <h2 class="mdi mdi-pen"></h2>
                                                            </a>
                                                            <a href="../traitement.php?id=<?= $row["id"] ?>" class='text-secondary' target='_blank'>
                                                              <h2 class="mdi mdi-send"></h2>
                                                            </a>
                                                            <!-- <div class="badge badge-opacity-success">Completed</div> -->
                                                          </td>
                                                        </tr>

                                                    <?php
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

    <?php include('layout_link_js.php') ?>

    <script>
      $(function($) {
        $('input#searchInput').on({
          'input': function() {
            $.ajax({
              url: 'info.php?q=' + $('#searchInput').val(),
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
                                          <a href="../traitement.php?id=' + x["id"] + '" class="text-secondary" target="_blank"><h2 class="mdi mdi-eye"></h2></a>\
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

</body>

</html>