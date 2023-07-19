
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tableau de bord</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../bootstrap1.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png">
  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=_3BF8PUqUVohERPNPkGUfKJpZrVZd9K0cZyxwFhlgM2fFN45TE00xXrQoOjUQJRhNso0Zy4TIEkBJ-o_fo-Ov5Ej7S70DRwykxJs9VYja4M" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2xvY2FsaG9zdC9pbXBhY3QvZGFzaGJvYXJkL3RlbXBsYXRlL25ld3NsZXR0ZXIucGhw"/><style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner d-none d-flex" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with
                this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&amp;utm_medium=banner&amp;utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start bg-success">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="./">
            <img src="../../Logo blanc.png" alt="logo">
          </a>
          <a class="navbar-brand brand-logo-mini" href="./">
            <img src="images/logo-mini.svg" alt="logo">
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Soyez le bienvenu, <span class="text-black fw-bold">Cédric</span></h1>

          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
         <!--  <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control" wfd-id="id0">
            </div>
          </li> -->



          <!-- <li class="nav-item dropdown d-none d-lg-block user-dropdown d-none">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown d-none" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                Profile <span class="badge badge-pill badge-danger">1</span></a>
              
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-0">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme bg-success">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark selected"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper ps ps--active-y" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do" wfd-id="id1">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" wfd-id="id2">
                      Team review meeting at 3.00 PM
                      <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" wfd-id="id3">
                      Prepare for presentation
                      <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" wfd-id="id4">
                      Resolve all the low priority tickets due today
                      <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="" wfd-id="id5">
                      Schedule meeting for next week
                      <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="" wfd-id="id6">
                      Project review
                      <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 393px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 198px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 643px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 423px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 643px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 423px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1122px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 860px;"></div>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas bg-success" id="sidebar">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="./">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>


          <li class="nav-item nav-category">SECTIONS</li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">NOS SECTIONS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="addFormation.php">Ajouter une formation</a></li>
                <li class="nav-item"><a class="nav-link" href="addUser.php">Ajouter un utilisateur</a></li>
                <li class="nav-item"><a class="nav-link " href="newsletter.php">Liste de diffusion</a></li>
                <li class="nav-item"><a class="nav-link " href="#">Campagne</a></li>
                <li class="nav-item d-none"><a class="nav-link " href="pages/forms/basic_elements.html">Nos newletters</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item d-none">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item d-none">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
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
                </button> --> <h4 class=""> Liste des Personnes s'ayant abonne </h4>

              
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
                                                            <a class='btn btn-secondary float-start'
                                                                href='?page=<?php if (isset($_GET['page'])) {
                                                                    echo "" . (intval($_GET['page']) - 1) . "";
                                                                } else {
                                                                    echo '0';
                                                                } ?>'>Pr&eacute;c&eacute;dent</a>
                                                            <a class='btn btn-primary text-white float-end'
                                                                href='?page=<?php if (isset($_GET['page'])) {
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <!-- <script src="js/template.js"></script> -->
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- <script src="js/dashboard.js"></script> -->
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <script src="/Impact/assets/jquery-3.2.1.min.js"></script>
  <script>
    $(function ($) {
      $('input#searchInput').on({
        'input': function () {
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
                '+ result['empty'] +'\
                </td>\
                </tr>')
              } else {
              for (var x of result['data']){
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
                                              <h6>' + x["formation"]+'</h6>\
                                            </div>\
                                          </div>\
                                        </td>\
                                        <td>\
                                          <h6>'+x["nom"]+'</h6>\
                                        </td>\
                                        <td>\
                                          <h6>'+x["entite"]+'</h6>\
                                        </td>\
                                        <td class="text-center pointer">\
                                          <a href="../../traitement.php?id='+x["id"]+'" class="text-secondary" target="_blank"><h2 class="mdi mdi-eye"></h2></a>\
                                        </td>\
                                      </tr>')
              }
            }}
          })
        }
      })
    }) (jQuery)
  </script>










</div></body>
</html>