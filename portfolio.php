<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> CINEF | Portfolio </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'layout_css.php'?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <style>
        main{
            width: 100%;
            background-image: linear-gradient( rgba(249,249,249,0.5), rgb(32,201,151,0.5) ), url(./assets/img/img_folio/background.png);
            background-size: cover ;
            background-position: center;
        }

        .container-fluid{
            padding-bottom: 15px;
            box-shadow: #000;
        }

        .container{
            height: 50%;
        }
       
        .row{
            padding-top: 30% 40%;
            align-items: center;
        }


        .title_folio{
            color: white;
            font-size: 3em ;
            
        }

        .col .content_folio_description {
            line-height: 25px;
            font-size: 15px;
            color: white;
        } 

        .button_explo {
            width: 180px;
            font-size: 20px;
            background: #fff;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 30px;
            padding: 12px 0;
            color: green;
            font-weight: bolder;
            transition: all .3s;
        }

        .button_explo:hover{
            background-color: rgba(0,102,51,0.7);
            color: white;
            transition: all .3s;
        }

        .col .cadre{
            padding-top: -40px;
        }

        .cards{
            width: 200px;
            height: 230px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            margin: 10px 15px;
            box-sizing: border-box;
            cursor: pointer;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
            background-color: #000 ;
        }
        

        .card1{
            background-image: url(./assets/img/img_folio/pic-1.png);
        }
        .card2{
            background-image: url(./assets/img/img_folio/pic-2.png);
        }
        .card3{
            background-image: url(./assets/img/img_folio/pic-3.png);
        }
        .card4{
            background-image: url(./assets/img/img_folio/pic-4.png);
        }


        .cards:hover{
            transform: translateY(-10px);
            z-index: 1;
            background-color: #999;
        }

        .title_card{
            color: #fff;
            text-shadow: 0 0 5px #999;
        }

        .cards p {
            text-shadow: 0 0 15px #000;
            font-size: 8px;
        }



    </style>

</head>


<body>
    
    <!-- START HEADER -->
        <?php include './header.php'?>
    <!-- End Header -->

    <!--  <main id="main"> -->

    <main class="">

        <div class="container-fluid pt-4">
            <div class="text-center"> 
                <h3 style="color:white"> CINEF SAS </h3>
                <br>
                <h4> Le memorial d'un parcours inspirant </h4>
            </div>
        </div>

        <div class="container">

        <div class="row">
                <div class="col cadre" >
                    <!-- <div class="splide__slide"> -->

                    
                    <div class="cards card1 ">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card1">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card2">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card3">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <!-- </div> -->
                    
                    
                </div>

                <div class="col">
                    <h1 class="title_folio"> Animations </h1>
                    <p class="content_folio_description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Expedita dolorum praesentium in, error consequuntur neque 
                        dolor! Dolorem corporis sunt neque, quas incidunt quidem 
                        sint optio ipsa sapiente aspernatur, accusamus debitis!
                    </p>
                    <a href="#">
                        <button class="button_explo"> Explore </button>
                    </a>
                </div>

            </div>

            <div class="row ">
                

                <div class="col">
                    <h1 class="title_folio">Ambiance de nos formations</h1>
                    <p class="content_folio_description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Expedita dolorum praesentium in, error consequuntur neque 
                        dolor! Dolorem corporis sunt neque, quas incidunt quidem 
                        sint optio ipsa sapiente aspernatur, accusamus debitis!
                    </p>
                    <a href="#">
                        <button class="button_explo"> Explore </button>
                    </a>
                </div>

                <div class="col cadre">
                    <div class="cards card1">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card1">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card2">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card3">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    
                    
                </div>

            </div>

            <div class="row">
                <div class="col cadre">
                    <div class="cards card1">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card1">
                        <h5 class="title_card">Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card2">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    <div class="cards card3">
                        <h5>Western desert</h5>
                        <p>
                            Lorem ipsum dolor sit amet qui quisquam. Eaque, rem.
                        </p>
                    </div>
                    
                    
                </div>

                <div class="col">
                    <h1 class="title_folio">Visites touristiques</h1>
                    <p class="content_folio_description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Expedita dolorum praesentium in, error consequuntur neque 
                        dolor! Dolorem corporis sunt neque, quas incidunt quidem 
                        sint optio ipsa sapiente aspernatur, accusamus debitis!
                    </p>
                    <a href="#">
                        <button class="button_explo"> Explore </button>
                    </a>
                </div>

                

            </div>



        </div>


    </main><!-- End #main -->

    <footer class="footer">

        <div>
            <center>Designed by CINEF SAS Copyright © 2023. All rights reserved.<center>
        </div>

    </footer>

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    
    <?php include 'layout_js.php'?>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide('#image-slider').mount();
        } );
    </script>

</body>

</html>