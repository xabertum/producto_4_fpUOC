<?php

include '/datos/conexion.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>World News - Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">

    <!-- Custom CSS Stylesheets -->
    <link href="css/index-style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/news-style.css">
    <link rel="stylesheet" href="css/overhang.css">

    <!-- CDN's -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard-all/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <!-- CUSTOM SCRIPTS -->
    <script src="js/overhang.js"></script>
	<script src="js/app.js"></script>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">World News</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active li-sign-in">
                        <a class="nav-link" href="sign-in.html">
                            <img class="icon-position" src="img/ic_account_circle_white_48dp_1x.png" height="24px" alt="Sign-In Icon">
                            <span id="sign-position">Sign-In</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper li-color-1">
                        <a class="nav-link" href="">
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>News</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Sports</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Weather</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Shop</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Earth</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Travel</span>
                        </a>
                    </li>

                    <li class="nav-item active li-wrapper">
                        <a class="nav-link" href="">
                            <span>Capital</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- NEWS -->

    <div class="container">
        <div class="wrapper-news">
            <header>
                <h2 id="editor0" contenteditable="true">Esto es una prueba...</h2>
                <div class="fecha">
                    <i class="fas fa-clock"></i>
                    <span>June 2, 2017</span>
                </div>
            </header>

            <div>

                <form action="newsCode.php" method="POST" id="form-news"></form>

                <div class="container-news">
                    <div class="">
                        <textarea id="editor1" name="editor1" cols="45" rows="30" form="form-news" class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tristique nisl. Vestibulum cursus
                            ac mi sed dapibus. Curabitur consequat velit urna, nec euismod sem gravida ac. Sed consectetur
                            orci eu nisl lobortis, sed dapibus urna aliquet. Nam nec tellus sit amet ligula porttitor accumsan
                            ut non ante. Proin tristique sem nec quam tincidunt ornare. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Donec dictum libero et gravida egestas.
                            Proin molestie orci eget quam aliquet vestibulum. Donec efficitur felis eu ultricies imperdiet.
                            Quisque auctor nunc vitae felis hendrerit, eget pretium enim hendrerit. Aenean sapien ex, pellentesque
                            in metus sed, faucibus varius orci. Nulla ornare quis nulla vitae ornare. Cras ac massa nibh.
                            Nullam vitae felis in magna finibus eleifend sit amet vitae tellus.
                        </textarea>

                        <!-- <img class="img-fluid" src="img/pexels-photo-220201.jpeg" alt="photo news">-->
                    </div>

                    <div class="">
                        <textarea id="editor2" name="editor2" cols="45" rows="30" form="form-news" class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tristique nisl. Vestibulum cursus
                            ac mi sed dapibus. Curabitur consequat velit urna, nec euismod sem gravida ac. Sed consectetur
                            orci eu nisl lobortis, sed dapibus urna aliquet. Nam nec tellus sit amet ligula porttitor accumsan
                            ut non ante. Proin tristique sem nec quam tincidunt ornare. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Donec dictum libero et gravida egestas.
                            Proin molestie orci eget quam aliquet vestibulum. Donec efficitur felis eu ultricies imperdiet.
                            Quisque auctor nunc vitae felis hendrerit, eget pretium enim hendrerit. Aenean sapien ex, pellentesque
                            in metus sed, faucibus varius orci. Nulla ornare quis nulla vitae ornare. Cras ac massa nibh.
                            Nullam vitae felis in magna finibus eleifend sit amet vitae tellus.
                        </textarea>
                    </div>

                    <div>
                        <img class="img-fluid" src="img/earth-earth-at-night-night-lights-41949.jpeg" alt="">
                    </div>

                    <p>
                        <input form="form-news" type="submit" value="Submit">
                    </p>


                </div>
            </div>
        </div>




    </div>




    <!-- FOOTER -->

    <footer>

        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <div class="col-3">
                        <p>© World News, 2018</p>
                    </div>
                    <div class="col-3">

                        <ul class="footer-ul">
                            <li>About Us</li>
                            <li>Contact</li>
                            <li>Terms & Conditions</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul class="footer-ul">
                            <li>
                                <img src="img/Path 38.png" width="10" alt=""> Facebook </li>
                            <li>
                                <img src="img/Path 39.png" width="10" alt=""> Twitter </li>
                            <li>
                                <img src="img/Path 40.png" width="10" alt=""> Instagram </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <form action="">
                            Subscribe to our newsletter
                            <input class="input-footer" type="text" placeholder="Email Address">
                            <button>OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        CKEDITOR.inline('editor1');
        CKEDITOR.inline('editor2');
    </script>


</body>

</html>