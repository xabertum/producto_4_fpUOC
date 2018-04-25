<?php
session_start();

if (isset($_SESSION['usuario'])) {
    
    if ($_SESSION['usuario']['rol'] == 1) {
        header("location:editor.php");
    } elseif ($_SESSION['usuario']['rol'] == 2) {
        header("location:periodista.php");
    }
}

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


</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">World News</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarsExample07" aria-controls="navbarsExample07"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active li-sign-in"><a class="nav-link"
						href="cerrar-sesion.php"> <img class="icon-position"
							src="img/exit_delete_close_remove_door-48.png" height="24px"
							alt="Sign-In Icon"> <span id="sign-position"><?php echo $_SESSION["usuario"]["nombre"]?>
							/ <?php echo $_SESSION["usuario"]["rol"] == 0 ? 'Admin':'';?></span>

					</a></li>

					<li class="nav-item active li-wrapper li-color-1"><a
						class="nav-link" href=""> <span>Home</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>News</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Sports</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Weather</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Shop</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Earth</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Travel</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Capital</span>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- LATEST NEWS SECTION -->
	<div class="container-fluid latest-bg">

		<div class="container">
			<div class="custom-container">
				<p id="date"></p>
			</div>
		</div>
		<div class="container latest-news">
			<div class="row">
				<div class="col-sm-6">
					<div class="custom-container">
						<img class="img-fluid" src="img/pexels-photo-92866.jpeg"
							alt="latest news 1">
						<div class="text-overlay">
							<h2>Texto de prueba...</h2>
							<p>Texto de prueba</p>
							<img class="barra-news" src="img/barraNewsRoja.png" alt="">
							<p>EUROPE</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="custom-container">
						<img class="img-fluid"
							src="img/building-vintage-bike-monument.jpg" alt="latest news 2">
						<div class="text-overlay">
							<h4>Texto de prueba...</h4>
							<img class="barra-news" src="img/barraNewsRoja.png" alt="">
							<p>EUROPE</p>
						</div>
					</div>

					<div class="custom-container">
						<img class="latest-news-padding img-fluid"
							src="img/pexels-photo-396143.jpeg" alt="latest news 2">
						<div class="text-overlay">
							<h4>Texto de prueba...</h4>
							<img class="barra-news" src="img/barraNewsRoja.png" alt="">
							<p>EUROPE</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="custom-container">
						<img class="img-fluid" src="img/pexels-photo-808908.jpeg"
							alt="latest news 2">
						<div class="text-overlay">
							<h4>Texto de prueba...</h4>
							<img class="barra-news" src="img/barraNewsRoja.png" alt="">
							<p>EUROPE</p>
						</div>
					</div>
					<div class="custom-container">
						<img class="latest-news-padding img-fluid"
							src="img/pexels-photo-10467.jpeg" alt="latest news 2">
						<div class="text-overlay">
							<h4>Texto de prueba...</h4>
							<img class="barra-news" src="img/barraNewsRoja.png" alt="">
							<p>EUROPE</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- NEWS SECTION -->

	<div class="container title-news">
		<img class="barra-news" src="img/barraNewsAmarillo.png" height="33"
			alt="">
		<h2>News</h2>
	</div>

	<div class="container latest-news">
		<div class="row">
			<div class="col-3">
				<img class="img-fluid" src="img/pexels-photo-169677.jpeg" alt="">
				<h3>Texto de prueba</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<img class="barra-news" src="img/barraNewsRoja.png" alt="">
				<p>EUROPE</p>
			</div>

			<div class="col-3">
				<img class="img-fluid" src="img/pexels-photo-315191.jpeg" alt="">
				<h3>Texto de prueba</h3>
				<p>Fusce vel ipsum porta, pellentesque nisl eget, lobortis nunc.</p>
				<img class="barra-news" src="img/barraNewsRoja.png" alt="">
				<p>EUROPE</p>
			</div>

			<div class="col-3">
				<img class="img-fluid" src="img/pexels-photo-373965.jpeg" alt="">
				<h3>Texto de prueba</h3>
				<p>Fusce vel ipsum porta, pellentesque nisl eget, lobortis nunc.</p>
				<img class="barra-news" src="img/barraNewsRoja.png" alt="">
				<p>EUROPE</p>
			</div>

			<div class="col-3">
				<img class="img-fluid" src="img/pexels-photo-459694.jpeg" alt="">
				<h3>Texto de prueba</h3>
				<p>Fusce vel ipsum porta, pellentesque nisl eget, lobortis nunc.</p>
				<img class="barra-news" src="img/barraNewsRoja.png" alt="">
				<p>EUROPE</p>
			</div>
		</div>
	</div>

	<!-- OTHER NEWS -->
	<div class="container-fluid latest-news latest-bg">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img class="barra-news" src="img/barraNewsAmarillo.png" height="33"
						alt="">
					<h2>Music</h2>
				</div>

				<div class="col-6">
					<img class="barra-news" src="img/barraNewsAmarillo.png" height="33"
						alt="">
					<h2>Fashion</h2>
				</div>
			</div>
		</div>

		<div class="container ">
			<div class="row">
				<div class="col-6">
					<img class="img-fluid" src="img/pexels-photo-704623.jpeg" alt="">
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
					<p>Nulla pretium a erat ut pulvinar. Suspendisse urna risus,
						convallis at neque sit amet, tempor dictum nisi. Maecenas ac
						cursus ante.</p>
				</div>

				<div class="col-3">
					<img class="img-fluid moda" height="200"
						src="img/pexels-photo-715821.jpeg" alt=""> <img
						class="img-fluid moda" src="img/pexels-photo-715836.jpeg" alt="">
				</div>

				<div class="col-3">
					<div class="moda">
						<h4>Sed neque risus.</h4>
						<p>Nulla pretium a erat ut pulvinar. Suspendisse urna risus,
							convallis at.</p>
					</div>

					<div class="moda-txt">
						<h4>Sed neque risus.</h4>
						<p>Nulla pretium a erat ut pulvinar. Suspendisse urna risus,
							convallis at.</p>
					</div>
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
							<li><img src="img/Path 38.png" width="10" alt=""> Facebook</li>
							<li><img src="img/Path 39.png" width="10" alt=""> Twitter</li>
							<li><img src="img/Path 40.png" width="10" alt=""> Instagram</li>
						</ul>
					</div>
					<div class="col-3">
						<form action="">
							Subscribe to our newsletter <input class="input-footer"
								type="text" placeholder="Email Address">
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

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>