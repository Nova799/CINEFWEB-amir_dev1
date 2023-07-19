<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="projetcss.css">
  <link rel="stylesheet" href="bootstrap1.min.css">
  <link rel="stylesheet" href="carousel.min.css">
  <link rel="stylesheet" href="animate.min.css">
  <link rel="stylesheet" href="all.min.css">
  

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
   .dropdown-menu {
      display: none;
    }

    .navbar li:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu a {
      color: black; /* Ajoutez la couleur de texte souhaitée ici */
    }



  </style>
  
  

</head>


<body>

  <!-- ======= Header ======= -->
  <!-- <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">cinefconseils@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>63186060</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> --><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="Logo blanc.png" width="80px"></h1>
      </a>
      <nav id="navbar" class="navbar">

      

        <ul>
          <li><a href="#hero" >Accueil</a></li>
          <li>
            
            <div class="dropdown">
              <button class="btn btn-none" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                  <a href="#main">A propos</a>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#nos services">Nos services</a></li>
                <li><a class="dropdown-item" href="#pourquoi nous choisir">Pourquoi nous choisir?</a></li>
              </ul>
            </div>
          </li>

          <li>
            
            <div class="dropdown">
              <button class="btn btn-none" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                  <a>Formulaires</a>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#formulairepreformation.php">Évaluation Pré-formation</a></li>
                <li><a class="dropdown-item" href="#evaluation-post">Évaluation Post-formation</a></li>
              </ul>
            </div>
          </li>
          
          <li><a href="#contact">Contact</a></li>
          <li>
            <a href="https://www.cinef-bj.com/formations/docs/catalogue_cinef_2023_2024.pdf" target="_blank"
          class="btn btn-light rounded-pill text-success py-2 px-4 ms-lg-5">CATALOGUE 2023-2024
            </a>
          </li>
      </ul>
      </nav><!--navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bienvenue à CINEF</h2>
          <p>La formation professionnelle et continue est le socle du développement des compétences. Nous donnons vie à vos envies.</p>
          <h1 class="text-white">Nous vous accompagnons dans le développement de vos compétences !</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="hero.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
  <!--services section start -->
  <div id="services" class="what_we_do_section layout_padding top-0 py-5">
            <div class="container">
                <h1 class="what_taital text-center"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 9h14M5 15h14"></path>
                    </svg>NOS SERVICES<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 9h14M5 15h14"></path>
                    </svg></h1>
                <p class="what_text text-center py-2">Vous êtes unique ! Décidez-vous maintenant et entrez dans le cercle des leaders. </p>
                <div class="what_we_do_section_2">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="box_main ">
                                <div class="icon_1 text-center">
                                    <h5> <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M16 4c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m4.78 3.58C19.93 7.21 19 7 18 7c-.67 0-1.31.1-1.92.28c.58.55.92 1.32.92 2.15V10h5v-.57c0-.81-.5-1.53-1.22-1.85M6 6c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2m1.92 1.28C7.31 7.1 6.67 7 6 7c-1 0-1.93.21-2.78.58C2.5 7.9 2 8.62 2 9.43V10h5v-.57c0-.83.34-1.6.92-2.15M10 4c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6H8v-.57c0-.81.5-1.53 1.22-1.85C10.07 7.21 11 7 12 7c1 0 1.93.21 2.78.58C15.5 7.9 16 8.62 16 9.43V10m-1 6c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6h-8v-.57c0-.81.5-1.53 1.22-1.85C15.07 19.21 16 19 17 19c1 0 1.93.21 2.78.58c.72.32 1.22 1.04 1.22 1.85V22M5 16c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6H3v-.57c0-.81.5-1.53 1.22-1.85C5.07 19.21 6 19 7 19c1 0 1.93.21 2.78.58c.72.32 1.22 1.04 1.22 1.85V22m1.75-9v-2h-1.5v2H9l3 3l3-3h-2.25Z"></path>
                                        </svg></h5>
                                </div>
                                
                                <h3 class="accounting_text text-center">Pôle GRH +</h3>
                                <p class="lorem_text text-center">Gestion des richesses humaines des entités</p>
                                <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success mb-2" href="https://cinef-bj.com/recrutement" target="_blank">En savoir +</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box_main active">
                                <div class="icon_1 text-center">
                                    <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m13 21l2-1l2 1v-7h-4m4-5V7l-2 1l-2-1v2l-2 1l2 1v2l2-1l2 1v-2l2-1m1-7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7v-2H4V5h16v10h-1v2h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-9 5H5V6h6m-2 5H5V9h4m2 5H5v-2h6Z"></path>
                                        </svg></h5>
                                </div>
                                <h3 class="accounting_text text-center">Pôle Formation+ </h3>
                                <p class="lorem_text text-center">Présentiel - Blended learning - E-learning</p>
                                <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success mb-2" href="https://www.cinef-bj.com/formations" target="_blank">En savoir +</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box_main">
                                <div class="icon_1 text-center">
                                    <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <path fill="currentColor" fill-rule="evenodd" d="M48 0H0v48h48V0ZM8 7v33h3V25a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v15h2V21a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v19h2V13a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v27h2v2H7a1 1 0 0 1-1-1V7h2Z" clip-rule="evenodd"></path>
                                        </svg></h5>
                                </div>
                                <h3 class="accounting_text text-center">Pôle Conseil +</h3>
                                <p class="lorem_text text-center">Etude - Assistance - Accompagnement des entités</p>
                                <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success" href="https://cinef-bj.com/conseil">En savoir + </a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box_main">
                                <div class="icon_1 text-center">
                                    <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                                <path d="M21 6H9C7.34315 6 6 7.34315 6 9V31C6 32.6569 7.34315 34 9 34H39C40.6569 34 42 32.6569 42 31V21"></path>
                                                <path d="M24 34V42"></path>
                                                <path d="M32 6L28 10L32 14"></path>
                                                <path d="M38 6L42 10L38 14"></path>
                                                <path d="M14 42L34 42"></path>
                                            </g>
                                        </svg></h5>
                                </div>
                                <h3 class="accounting_text text-center">Pôle IT +</h3>
                                <p class="lorem_text text-center">Transformation digitale, solutions et intégration web</p>
                                <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success" href="https://cinef-bj.com/it">En savoir + </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--services section end -->
         <!-- Newsletter Start -->

         <div class="container-xxl bg-success my-6 wow fadeInUp mb-0 py-3" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 id="newsletter" class="text-white">S'abonnez à notre newsletter ?</h3>
                        <small class="text-white">Restez connecté à nos actualités et programmes de formation</small>
                        <div class="position-relative w-100 mt-3">
                            <form action="abonnes.php" method="post">
                            <div class="d-flex py-3">
                              <input name="nom" class="form-control border-0 rounded-pill w-100 ps-4 pe-5 me-2" type="text" placeholder="Entrez votre nom" style="height: 35px;" required="" wfd-id="id0">
                              <input name="prenom" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre prenom" style="height: 35px;" required="" wfd-id="id0">
                            </div>
                            <div class="d-flex py-3">    
                              <input name="user_email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5 me-2" type="email" placeholder="Entrez votre Email" style="height: 35px;" required="" wfd-id="id0">
                               <input name="phone" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="phone" placeholder="Entrez votre Whatsapp" style="height: 35px;" required="" wfd-id="id0">
                            </div> 
                            <center> <button type="submit" class="btn btn-secondary rounded-pill">Enregistrer</button></center>
     
                          
                          </form>

                            <p class="text-center text-red mt-2"> </p>

                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Features Start -->
        <div class="container-xxl py-5 mb-0 mt-0">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="d-inline-block border rounded-pill text-success px-4 mb-3 ">Nos atouts !</div>
                        <h2 class="mb-4">Pourquoi les gens nous choisissent-ils ?</h2>
                        <p class="mb-2 bee-block bee-block-3 bee-paragraph" text-align:="" justify="">Le cabinet CINEF a été fondé en 2013 afin d'offrir une alternative supérieure à ce qui se trouve sur le marché en termes de développement des talents et des compétences en entreprise ; conseil, assistance et accompagnement des entreprises ; détection et recrutement et gestion des talents.</p>
                        <p>Notre particularité se situe dans la structure de nos offres en général et en particulier de nos offres de formation qui intègrent toute l'ingénerie de la formation et l'andragogie.</p>





                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success rounded-pill py-3 px-5 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Mot du Président de CINEF SAS
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">MOT DU PRESIDENT DE CINEF SAS</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        
                                        

                                        
                                            <title>
                                            </title>
                                            <meta content="summary_large_image" name="twitter:card">
                                            <meta content="website" property="og:type">
                                            <meta content="" property="og:description">
                                            <meta content="https://dvlnxvr4gl.preview-postedstuff.com/V2-0VKQ-UHfH-zb0Q-911C/" property="og:url">
                                            <meta content="https://pro-bee-beepro-thumbnails.s3.amazonaws.com/messages/826062/810032/1708921/7792337_large.jpg" property="og:image">
                                            <meta content="" property="og:title">
                                            <meta content="" name="description">
                                            
                                            <meta content="width=device-width" name="viewport">
                                            <link href="./CINEF SAS Formation Professionnelle Continue_files/css" rel="stylesheet" type="text/css">
                                            <style>
                                                .bee-row,
                                                .bee-row-content {
                                                    position: relative
                                                }

                                                .bee-row-1,
                                                .bee-row-1 .bee-row-content,
                                                .bee-row-2,
                                                .bee-row-3 {
                                                    background-repeat: no-repeat
                                                }

                                                body {
                                                    background-color: #fff;
                                                    color: #000;
                                                    font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif
                                                }



                                                p{
                                                    text-align: justify;
                                                }

                                                a {
                                                    color: #fff
                                                }

                                                * {
                                                    box-sizing: border-box
                                                }

                                                body,
                                                h1,
                                                p {
                                                    margin: 0
                                                }

                                                .bee-row-content {
                                                    max-width: 1200px;
                                                    margin: 0 auto;
                                                    display: flex
                                                }

                                                .bee-row-content .bee-col-w5 {
                                                    flex-basis: 42%
                                                }

                                                .bee-row-content .bee-col-w7 {
                                                    flex-basis: 58%
                                                }

                                                .bee-row-content .bee-col-w12 {
                                                    flex-basis: 100%
                                                }

                                                .bee-icon .bee-icon-label-right a {
                                                    text-decoration: none
                                                }

                                                .bee-divider,
                                                .bee-image {
                                                    overflow: auto
                                                }

                                                .bee-image .bee-center {
                                                    margin: 0 auto
                                                }

                                                .bee-divider .right {
                                                    float: right
                                                }

                                                .bee-row-1 .bee-col-2 .bee-block-1 {
                                                    width: 100%
                                                }

                                                .bee-icon,
                                                .bee-icon .bee-icon-image,
                                                .bee-icon .bee-icon-label-right {
                                                    display: inline-block
                                                }

                                                .bee-icon {
                                                    vertical-align: middle
                                                }

                                                .bee-icon .bee-icon-image {
                                                    vertical-align: middle;
                                                    margin-right: -4px
                                                }

                                                .bee-image img {
                                                    display: block;
                                                    width: 100%
                                                }

                                                .bee-social .icon img {
                                                    max-height: 32px
                                                }

                                                .bee-paragraph {
                                                    overflow-wrap: anywhere
                                                }

                                                @media (max-width:768px) {
                                                    .bee-row-content:not(.no_stack) {
                                                        display: block
                                                    }
                                                }

                                                .bee-row-1 {
                                                    background-image: url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/6871/bg-garden2__1_.png');
                                                    background-size: cover
                                                }

                                                .bee-row-1 .bee-row-content {
                                                    background-size: auto;
                                                    color: #000
                                                }

                                                .bee-row-1 .bee-col-1 {
                                                    padding: 60px 30px 30px
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-1 {
                                                    padding-top: 30px;
                                                    width: 100%;
                                                    text-align: center
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-2,
                                                .bee-row-1 .bee-col-1 .bee-block-5 {
                                                    padding: 10px
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-3 {
                                                    padding-top: 30px
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-4 {
                                                    width: 100%;
                                                    text-align: center
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-6 {
                                                    text-align: right
                                                }

                                                .bee-row-1 .bee-col-2 {
                                                    padding: 60px 30px
                                                }

                                                .bee-row-3 .bee-col-1,
                                                .bee-row-3 .bee-col-1 .bee-block-1 {
                                                    padding-bottom: 5px;
                                                    padding-top: 5px
                                                }

                                                .bee-row-2 .bee-row-content,
                                                .bee-row-3 .bee-row-content {
                                                    background-repeat: no-repeat;
                                                    color: #000
                                                }

                                                .bee-row-3 .bee-col-1 .bee-block-1 {
                                                    color: #9d9d9d;
                                                    font-family: inherit;
                                                    font-size: 15px;
                                                    text-align: center
                                                }

                                                .bee-row-3 .bee-col-1 .bee-block-1 .bee-icon-image {
                                                    padding: 5px 6px 5px 5px
                                                }

                                                .bee-row-3 .bee-col-1 .bee-block-1 .bee-icon {
                                                    margin-left: 0;
                                                    margin-right: 0
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-3 {
                                                    color: #fff;
                                                    direction: ltr;
                                                    font-size: 18px;
                                                    font-weight: 400;
                                                    letter-spacing: 0;
                                                    line-height: 150%;
                                                    text-align: justify
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-3 a {
                                                    color: #1a5c40
                                                }

                                                .bee-row-1 .bee-col-1 .bee-block-3 p:not(:last-child) {
                                                    margin-bottom: 16px
                                                }
                                            </style>
                                            <script async="" defer="" src="./CINEF SAS Formation Professionnelle Continue_files/api.js.téléchargement">
                                            </script>
                                            <script>
                                                function onSubmit(token) {
                                                    for (const form of document.getElementsByClassName("recaptcha-form")) {
                                                        if (form.checkValidity()) {
                                                            form.submit();
                                                        } else {
                                                            grecaptcha.reset();
                                                            form.reportValidity();
                                                        }
                                                    }
                                                }
                                            </script>
                                        

                                        
                                            <div class="bee-page-container">
                                                <div class="bee-row bee-row-1">
                                                    <div class="bee-row-content">
                                                        <div class="bee-col bee-col-1 bee-col-w7">
                                                            <div class="bee-block bee-block-1 bee-heading">
                                                                <h1 style="color:#ffffff;direction:ltr;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:60px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;">
                                                                    <strong>
                                                                        Mot du Président de&nbsp; CINEF SAS
                                                                    </strong>
                                                                </h1>
                                                            </div>
                                                            <div class="bee-block bee-block-2 bee-divider">
                                                                <div class="left" style="border-top:2px solid #FFFFFF;width:100%;">
                                                                </div>
                                                            </div>
                                                            <div class="bee-block bee-block-3 bee-paragraph">
                                                                <p>
                                                                    Notre mission est, compte tenu du rythme soutenu et de l’ampleur des changements qui touchent vos entreprises et organisations, de continuellement maintenir, mettre à jour,
                                                                    <br>
                                                                    améliorer et approfondir vos connaissances et celles de vos collaborateurs afin d’être au fait des dernières tendances et évolutions dans votre secteur d’activité.
                                                                    <br>
                                                                    Notre rôle est de vous soutenir en vous offrant une variété d’activités de formation, d’outils qui vous aideront à rester un leader dans votre domaine. Notre programme vous donne accès à des activités de formation variées et de grande qualité qui sont dispensées par des formateurs inspirants, qualifiés et chevronnés.
                                                                    <br>
                                                                    Cette année, nous avons travaillé à enrichir notre offre de façonsignificative et pertinente dans la quasi-totalité de vos domaines d'exercice.
                                                                    <br>
                                                                    Pour cette nouvelle année, nous avons le plaisir de vousannoncer que notre solution de formation à distance est opérationnelle à travers notre plateforme E-Learning. A cet
                                                                    <br>
                                                                    effet, nous offrirons à la suite de chaque session de formation, un suivi accompagnement à travers ladite plateforme afin de vous accompagner dans la mise en œuvre des acquis des formations. Inscrivez-vous dès à présent et bénéficiez de la panoplie d’outils que nous proposons afin de maximiser votre influence,et accroître la performance de votre organisation. Merci de votre confiance renouvelée qui nous conforte dans notre détermination à élaborer des formations sur mesure et répondre ainsi à vos besoins particuliers.
                                                                </p>
                                                                <p>
                                                                    <br>
                                                                    Bonne et heureuse 2022 !
                                                                    <br>
                                                                    Bien cordialement,
                                                                </p>
                                                            </div>
                                                            <div class="bee-block bee-block-4 bee-heading">
                                                                <h1 style="color:#ffffff;font-size:38px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                                                                    <span class="tinyMce-placeholder">
                                                                        Wilfrid DEDJI​
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                            <div class="bee-block bee-block-5 bee-divider">
                                                                <div class="right" style="border-top:2px solid #FFFFFF;width:50%;">
                                                                </div>
                                                            </div>
                                                            <div class="bee-block bee-block-6 bee-social">
                                                                <div class="content">
                                                                    <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                        <a href="https://www.linkedin.com/today/author/wilfrid-dedji-11459029" target="_blank">
                                                                            <img alt="Linkedin" src="./CINEF SAS Formation Professionnelle Continue_files/linkedin@2x.png" title="linkedin" tar=""></a>
                                                                    </span>
                                                                    <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                        <a href="https://fr-fr.facebook.com/public/Wilfrid-Dedji" target="_blank">
                                                                            <img alt="Facebook" src="./CINEF SAS Formation Professionnelle Continue_files/facebook@2x.png" title="Facebook"></a>
                                                                    </span>
                                                                    <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                        <a href="https://le-fondement-juridique-49.webself.net/blog/2019/02/09/seminaire-de-formation--cartographie-des-risques-juridiques-et-financiers-des-entreprises-regies-par-le-droit-ohada--a-lome-togo-du-25-fevrier-au-1-er-mars-2019" target="_blank">
                                                                            <img alt="Twitter" src="./CINEF SAS Formation Professionnelle Continue_files/twitter@2x.png" title="Twitter"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bee-col bee-col-2 bee-col-w5">
                                                            <div class="bee-block bee-block-1 bee-image">
                                                                <img alt="gardening" class="bee-center bee-fixedwidth bee-fullwidthOnMobile" src="./CINEF SAS Formation Professionnelle Continue_files/P.png" style="max-width:440px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bee-row bee-row-2">
                                                    <div class="bee-row-content">
                                                        <div class="bee-col bee-col-1 bee-col-w12">
                                                            <div class="bee-block bee-block-1 bee-spacer">
                                                                <div class="spacer" style="height:80px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bee-row bee-row-3">
                                                    <div class="bee-row-content">
                                                        <div class="bee-col bee-col-1 bee-col-w12">
                                                            <div class="bee-block bee-block-1 bee-icons" id="beepro-locked-footer">
                                                                <div class="bee-icon">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        

                                        


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">SOUPLESSE ET AGILITÉ</h6>
                                </div>
                                <span>Nous prenons en compte vos besoins et restons à l'écoute de vos préocupations</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">PERFOMANCE</h6>
                                </div>
                                <span>Selon vos objectifs professionnels, nous proposons l'expertise et le programme adapté </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">NOTRE REGISTRE</h6>
                                </div>
                                <span>CINEF ne cesse de croitre l'effectif des stagiaires estimé à plus de 200 par an</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">UNE LARGE AUDIENCE</h6>
                                </div>
                                <span><p>CINEF,le meilleur moyen de découvrir des acteurs du même domaine d'activités</p></span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">QUALITÉ DE LA PRESTATION</h6>
                                </div>
                                <span>Une évaluation de la formation en cours et a posteriori pour mesurer votre retour sur investissement. </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">24/7 SUPPORT CLIENT</h6>
                                </div>
                                <span><p class="text-justify">Le client est au coeur de notre politique qualité. Nous lui accordons toute notre attention avant, pendant et après la formation</p></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- Features End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-4 mt-0 d-none">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="d-inline-block border rounded-pill text-success px-4 mb-3"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                        </svg></div>
                    <h4 class="mb-5">Ce que disent nos clients !</h4>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp owl-loaded owl-drag" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    
                    
                    
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 3721px; transform: translate3d(-744px, 0px, 0px);"><div class="owl-item cloned" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>CINEF, l'assistance des participants est formidable.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mr MUTOLO </h6>
                                <small>Resp des opérations, GIZ-RDC</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                <small>Assistante de Direction, ARMP-NIGER</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned active" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mlle MORISSON</h6>
                                <small>Assistante de Direction, NCARE-Abidjan</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item active center" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>Ce fut un plaisir de vivre ce programme de formation avec CINEF</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mme AKPOVO</h6>
                                <small>DAF, PROJET II-BENIN</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>CINEF, l'assistance des participants est formidable.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mr MUTOLO </h6>
                                <small>Resp des opérations, GIZ-RDC</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                <small>Assistante de Direction, ARMP-NIGER</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mlle MORISSON</h6>
                                <small>Assistante de Direction, NCARE-Abidjan</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>Ce fut un plaisir de vivre ce programme de formation avec CINEF</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mme AKPOVO</h6>
                                <small>DAF, PROJET II-BENIN</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>CINEF, l'assistance des participants est formidable.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mr MUTOLO </h6>
                                <small>Resp des opérations, GIZ-RDC</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 372.007px;"><div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./CINEF SAS Formation Professionnelle Continue_files/User_Circle.png">
                            <div class="ps-3">
                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                <small>Assistante de Direction, ARMP-NIGER</small>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="bi bi-chevron-left"></i></div><div class="owl-next"><i class="bi bi-chevron-right"></i></div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
        <!-- Testimonial End -->

        
  

 <!--  <main id="main">

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact background-color: #cbe4d1 !important;";>
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Contactez nous si vous avez des suggestions</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4 class="text-white">Siège</h4>
                  <p class="text-white">St Rita, Cotonou, BENIN</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4 class="text-white">Email:</h4>
                  <p class="text-white">infos@cinef-bj.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4 class="text-white">Téléphone:</h4>
                  <p class="text-white">+229 63 18 60 60</p>
                </div>
              </div><!-- End Info Item -->

              <!--div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div--><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message est envoyé avec succès! Merci</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <footer class="footer">
          
            
            <div><center>Designed by CINEF SAS Copyright © 2023. All rights reserved.<center></div>
          
        </footer>
  
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="wow.min.js"></script>
  <script src="owl.carousel.min.js"></script>
  <script src="jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>