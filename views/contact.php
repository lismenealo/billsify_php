<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Billsify Home</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../css/main.css" />
</head>
<body class="no-sidebar is-preload">
<div id="page-wrapper">

	<!-- Header -->
	<section id="header">
		<div class="container">

			<!-- Logo -->
			<h1 id="logo"><a href="../index.php"><i>₿</i>illsify</a></h1>
			<p>The application that simplifies the home economy</p>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a class="icon solid fa-home" href="../index.php"><span>Home</span></a></li>
					<li><a class="icon solid fa-cogs" href="application_details.php"><span>Application Details</span></a></li>
					<li><a class="icon solid fa-dollar-sign" href="go_premium.php"><span>Go premium </span></a></li>
					<li class="active"><a class="icon solid fa-mail-bulk" href="contact.php"><span>Contact Us</span></a></li>
				</ul>
			</nav>

		</div>
	</section>

	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">

				<header>
					<h2>Questions or comments? <strong>Get in touch:</strong></h2>
				</header>

				<div class="col-6 col-12-small">
					<section>
						<h3>Do no hesitate</h3>
						<p>
							If you have any questions or remarks about how this idea can be improved, we are in search of great opinions :D.
						</p>

						<h3>Contribute</h3>
						<p>
							If you like to contribute with the development of the application is more than welcome. At the moment is just an school project, but who knows
						</p>

						<h3>Our head quarters: </h3>
						<p>
							Carrer AlgunSitio 1234<br />
							Valencia, Valencia, CP: 460001<br />
							Spain
						</p>

						<h3>Or call us: </h3>
						<p>
							(+34) 612 34 56 78
						</p>
					</section>
				</div>

				<div class="col-6 col-12-small">
					<section>
						<h2 class="hidden">Contact form</h2>
						<form method="post" action="#">
							<div class="row gtr-50">
								<div class="col-6 col-12-small">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="col-6 col-12-small">
									<input name="email" placeholder="Email" type="text" />
								</div>
								<div class="col-12">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								<div class="col-12">
									<a href="#" class="form-button-submit button icon solid fa-envelope">Send Message</a>
								</div>
							</div>
						</form>
					</section>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<header>
				<h2>Questions or comments? <strong>Get in <a href="contact.php">touch:</a></strong></h2>
			</header>
			<div class="row">
				<div class="col-12 col-12-medium">
					<section>
						<h2 class="hidden">Contact us</h2>
						<p>Get in contact with us <a href="contact.php">here</a> or via social media</p>
						<div class="row">
							<div class="col-6 col-12-small">
								<ul class="icons">
									<li class="icon solid fa-home">
										Carrer AlgunSitio 1234<br />
										Valencia, Valencia, CP: 460001<br />
										Spain
									</li>
									<li class="icon solid fa-phone">
										(+34) 612 34 56 78
									</li>
									<li class="icon solid fa-envelope">
										<a href="contact.php#">info@billsify.com</a>
									</li>
								</ul>
							</div>
							<div class="col-6 col-12-small">
								<ul class="icons">
									<li class="icon brands fa-twitter">
										<a href="#">@billsfy</a>
									</li>
									<li class="icon brands fa-instagram">
										<a href="#">instagram.com/billsfy</a>
									</li>
									<li class="icon brands fa-dribbble">
										<a href="#">dribbble.com/biilsfy</a>
									</li>
									<li class="icon brands fa-facebook-f">
										<a href="#">facebook.com/biilsfy</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div id="copyright" class="container">
			<ul class="links">
				<li>&copy; ₿illsify. All rights reserved.</li>
			</ul>
		</div>
	</section>

</div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA90pNmvagA3ZZ2JyPDcWvHm-fcXd_4gto&callback=initMap&libraries=&v=weekly" async></script>
<script src="../js/map-loader.js"></script>
</body>
</html>