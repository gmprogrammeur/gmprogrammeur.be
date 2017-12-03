<?php

if (isset($_POST["submit"])) {

	// 1. Sanitization
	$prenomsani = filter_var($_POST["Nom"], FILTER_SANITIZE_STRING);

	$prenomIsempty = empty($prenomsani);

	$emailIsSani = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);

	$emailIsempty = empty($emailIsSani);

	$emailIsValid = filter_var($emailIsSani, FILTER_VALIDATE_EMAIL);

	$tachesani = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);

	$tacheIsempty = empty($tachesani);

	// 2. Validation

	if ($prenomIsempty == false) {

		if ($emailIsempty == false && $emailIsValid == true) {

			if ($tacheIsempty == false) {

				// 3. Exécution

				$to = "gmprogrammeur@gmail.com";

				$subject = 'Message de mon site internet';

				$headers = 'Mime-Version: 1.0'."\r\n";

				$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

				$headers .= "\r\n";

				$message  = 'De: ' . $prenomsani . "<br />";

				$message .= 'Email: ' . $emailIsValid . "<br />";

				$message .= "Message:<br />" . $tachesani . "<br />";

				$envoi = mail($to, $subject, $message, $headers);

			}

		}

	}

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107768125-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107768125-1');
	</script>

	<link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="projet.css" media="screen">

	<title>GMProgrammeur</title>

	<meta charset="UTF-8">
	<meta name="description" content="Passionné par le monde informatique et technologique, principalement la création de site internet (Responsive), je suis toujours motivé pour mener à bien de nouveaux projets, pour ce faire, je m'informe et me forme continuellement.">
	<meta name="keywords" content="gmprogrammeur, programmeur, développeur, graphisme, front end, back end, html, css, javascript, php, sql, site vitrine, cms,ecommerce, maintenance">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
	body, html {
		height: 100%;
		color: black;
		line-height: 1.8;
	}

	/* Create a Parallax Effect */
	.bgimg-1, .bgimg-2, .bgimg-3 {
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	/* First image */
	.bgimg-1 {
		background-image: url('Images/gmba1.jpg');
		min-height: 100%;
	}

	/* Second image */
	.bgimg-2 {
		background-image: url("Images/gmba2.jpg");
		min-height: 50%;
	}

	/* Second image */
	.bgimg-3 {
		background-image: url("Images/gmba3.jpg");
		min-height: 50%;
	}

	.w3-wide {letter-spacing: 10px;}
	.w3-hover-opacity {cursor: pointer;}

	/* Turn off parallax scrolling for tablets and phones */
	@media only screen and (max-device-width: 1024px) {
		.bgimg-1, .bgimg-2 {
			background-attachment: scroll;
		}
	}

	</style>

</head>
<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">
	  <div class="w3-bar w3-blue w3-greyscale-min w3-text-black">

		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-text-white" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#accueil" class="w3-bar-item w3-button w3-hover-text-white"><i class="fa fa-laptop"></i> GMPROGRAMMEUR</a>
		<a href="#apropos" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-question"></i> OVER MIJ</a>
		<a href="#projet" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-th"></i> PROJECT</a>
		<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-envelope"></i> CONTACT</a>
		<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white">FR</a>
		<a href="en.php" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white">EN</a>

	  </div>

	  <!-- Navbar on small screens -->
	  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">

	  	<a href="#apropos" class="w3-bar-item w3-button" onclick="toggleFunction()">OVER MIJ</a>
		<a href="#projet" class="w3-bar-item w3-button" onclick="toggleFunction()">PROJECT</a>
		<a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
		<a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()">FR</a>
		<a href="en.php" class="w3-bar-item w3-button" onclick="toggleFunction()">EN</a>

	  </div>
	</div>

	<!-- First Parallax -->
	<div class="bgimg-1 w3-display-container" id="accueil">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-text-black w3-center w3-padding-large w3-blue w3-greyscale-min w3-xlarge w3-wide"><i class="fa fa-laptop w3-hover-text-grey"></i> GMProgrammeur</h1>

	  </div>

	  <div class="w3-display-bottommiddle" style="white-space:nowrap; margin-bottom: 40px;">

		<a href="#apropos" class="w3-button w3-blue w3-greyscale-min w3-hover-text-white w3-text-black"><i class="fa fa-question"></i> OVER MIJ <i class="fa fa-caret-down"></i></a>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64" id="apropos">

		<h2 class="w3-center"><i class="fa fa-question w3-hover-text-grey"></i> OVER MIJ</h2>

		<h3 class="w3-center w3-large"><em>Geoffrey Marique<br>Programmer | Ontwikkelaar</em></h3>

		<p class="w3-large w3-center">Gepassioneerd door de computer- en technologische wereld, voornamelijk het opzetten van een website (Responsive), ben ik altijd gemotiveerd om nieuwe projecten uit te voeren, om dit te doen, informeer ik mezelf en train mezelf continu.</p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large" style="margin-top: 50px;">

				<p class="w3-large">Event: <a href="http://www.hackbelgium.be/" target="_blank">HackBelgium</a>, <a href="https://www.digitalfirst.be/index.php" target="_blank">Digital First</a>

				<br>

				Vrijwilliger: <a href="http://www.croix-rouge.be/" target="_blank">Croix-Rouge</a>

				<br>

				Ervaring: <a href="http://www.becode.org/" target="_blank">BeCode</a>, <a href="http://www.croix-rouge.be/" target="_blank">Croix-Rouge</a>, <a href="http://www.gmprogrammeur.be/" target="_blank">GMProgrammeur</a>, <a href="http://www.verslalune.fr/" target="_blank">Vers la Lune</a>

				<br>

				Certificaat: <a href="https://www.freecodecamp.org/gmprogrammeur/front-end-certification" target="_blank">Front End Development Certification</a>

				<br>
				
				Opleiding: <a href="http://www.becode.org/" target="_blank">BeCode</a>, <a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large">

			</div>

			<div class="w3-col m4 w3-padding-large w3-center">

				<p class="w3-center w3-large"><a href="https://github.com/gmprogrammeur" target="_blank"><i class="fa fa-github w3-text-dark-grey w3-hover-text-grey"></i></a> <a href="https://www.linkedin.com/in/gmprogrammeur/" target="_blank"><i class="fa fa-linkedin w3-text-dark-grey w3-hover-text-grey"></i></a> <a href="https://twitter.com/gmprogrammeur" target="_blank"><i class="fa fa-twitter w3-text-dark-grey w3-hover-text-grey"></i></a></p>

				<img src="Images/gmph.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="gm logo" style="width: 200px;">

			</div>

			<div class="w3-col m1 w3-padding-large">

			</div>

		</div>

		<br>

		<h3 class="w3-large w3-center"><em>Vaardigheden:</em></h3>


		<p class="w3-wide"><i class="fa fa-laptop w3-hover-text-grey"></i> PROJECT MANAGER</p>

		<div class="w3-light-grey">

			<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">

			50%

			</div>

		</div>

		<p class="w3-wide"><i class="fa fa-laptop w3-hover-text-grey"></i> FRONT END</p>

		<div class="w3-light-grey">

			<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">

			50%

			</div>

		</div>

		<p class="w3-wide"><i class="fa fa-laptop w3-hover-text-grey"></i> BACK END</p>

		<div class="w3-light-grey">

			<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">

			50%

			</div>

	  	</div>

		<br><br>

		<div class="w3-center">

			<a href="#projet" class="w3-button w3-blue w3-greyscale-min w3-hover-text-white w3-text-black"><i class="fa fa-th"></i> PROJECT <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-light-blue w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bullhorn w3-hover-text-grey"></i> AANBIEDING</h3>

		<p class="w3-center w3-large">Aanbiedingen van <i class="fa fa-laptop w3-hover-text-grey"></i> GMProgrammeur</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-laptop w3-hover-text-grey"></i><br>Showcase website</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-cubes w3-hover-text-grey"></i><br>CMS (Niet beschikbaar)</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-cart-arrow-down w3-hover-text-grey"></i><br>E-Commerce (Niet beschikbaar)</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-gear w3-hover-text-grey"></i><br>Onderhoud</p>

		</div>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="projet">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-blue w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-th w3-hover-text-grey"></i> Project</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-th w3-hover-text-grey"></i> PROJECT</h2>

		<h3 class="w3-center w3-large"><em>Voicis mijn projecten, althans tot de meest recente</em></h3>

		<br>

			<div class="slideshow-container">

			  <div class="mySlides fade">

				<div class="numbertext">1 / 4</div>

				<a href="http://www.becode.org/" target="_blank"><img src="Images/gm1p.jpg"></a>

				<div class="text">1er project: BeCode</div>

			  </div>

			  <div class="mySlides fade">

				<div class="numbertext">2 / 4</div>

				<a href="http://www.croix-rouge.be/" target="_blank"><img src="Images/gm2p.jpg" ></a>

				<div class="text">2eme project : Croix-Rouge de Belgique</div>

			  </div>

			  <div class="mySlides fade">

				<div class="numbertext">3 / 4</div>

				<a href="http://www.gmprogrammeur.be/" target="_blank"><img src="Images/gm3p.jpg" ></a>

				<div class="text">3eme project : GMProgrammeur</div>

			  </div>

			  <div class="mySlides fade">

				<div class="numbertext">4 / 4</div>

				<a href="http://www.verslalune.fr/" target="_blank"><img src="Images/gm4p.jpg"></a>

				<div class="text">4eme project: Vers la Lune</div>

			  </div>

			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>

			<script type="text/javascript">

				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  if (n > slides.length) {slideIndex = 1} 
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none"; 
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block"; 
				  dots[slideIndex-1].className += " active";
				}

			</script>

		<br><br>

		<div class="w3-center">

			<a href="#contact" class="w3-button w3-blue w3-greyscale-min w3-hover-text-white w3-text-black"><i class="fa fa-envelope"></i> CONTACT <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-light-blue w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-line-chart w3-hover-text-grey"></i> STATISTIEKEN</h3>

		<p class="w3-center w3-large">Statistieken van <i class="fa fa-laptop w3-hover-text-grey"></i> GMProgrammeur</p>

		<div class="w3-quarter w3-large">

			<p>2 <b>+</b><br>Opleiding</p>

		</div>

		<div class="w3-quarter w3-large">

			<p>4 <b>+</b><br>Project</p>

		</div>

		<div class="w3-quarter w3-large">

			<p>1 <b>+</b><br>Vrijwilliger</p>

		</div>

		<div class="w3-quarter w3-large">

			<p>2 <b>+</b><br>Event</p>

		</div>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-3 w3-display-container" id="contact">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-blue w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-envelope w3-hover-text-grey"></i> Contact</h1>

	  </div>

	</div>

	<!-- Container  -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-envelope w3-hover-text-grey"></i> CONTACT</h2>

		<h3 class="w3-center w3-large"><em>Stuur me een bericht per e-mail</em></h3>

		<div class="w3-row w3-padding-32 w3-section">

			<div class="w3-col m4 w3-container">

				<!-- Add Google Maps -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161254.24966331615!2d4.22332128363326!3d50.83861614862046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c486740f9fff%3A0x10099ab2f4c8030!2sBruxelles!5e0!3m2!1sfr!2sbe!4v1511738075870"" width="auto" height="266" frameborder="0" style="border:0" class="w3-opacity-min w3-hover-opacity-off" alt="google map" allowfullscreen></iframe>

			</div>

			<div class="w3-col m8 w3-panel">

				<div class="w3-large w3-margin-bottom">

					<i class="fa fa-map-marker fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i>Bruxelles, Belgique<br>
					<i class="fa fa-envelope fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i>Email: gmprogrammeur@gmail.com

				</div>

				<form action="" method="POST">

					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Name" name="Nom">

						</div>

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Email" name="Email">

						</div>

					</div>

					<input class="w3-input w3-border" type="text" placeholder="Message" name="Message">

					<button class="w3-button w3-dark-grey w3-right w3-section w3-text-black w3-hover-text-white" type="submit" name="submit">

						<i class="fa fa-paper-plane"></i> STUREN

					</button>

				</form>

			</div>

		</div>

	</div>

	<!-- Collaboration -->
	<div class="w3-row w3-center w3-light-blue w3-text-black w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-handshake-o w3-hover-text-grey"></i> PARTNER</h3>

		<p class="w3-center w3-large">Partners van <i class="fa fa-laptop w3-hover-text-grey"></i> GMProgrammeur</p>

		<div class="w3-quarter w3-large">

			<p></p>

		</div>

		<div class="w3-quarter w3-large">

			<p></p>

		</div>

		<div class="w3-quarter w3-large">

			<p></p>

		</div>

		<div class="w3-quarter w3-large">

			<p></p>

		</div>

	</div>

	<!-- Footer -->
	<footer class="w3-center w3-blue w3-greyscale-min w3-padding-64">

	  <a href="#accueil" class="w3-button w3-dark-grey w3-hover-grey w3-text-black w3-hover-text-white"><i class=" fa fa-laptop"></i> GMPROGRAMMEUR <i class="fa fa-caret-up"></i></a>

	  <p class="w3-center w3-large w3-text-black" style="margin-bottom: 0;"><i class="fa fa-laptop w3-hover-text-grey"></i> <i class="fa fa-tablet w3-hover-text-grey"></i> <i class="fa fa-mobile w3-hover-text-grey"></i><br><i class="fa fa-laptop w3-hover-text-grey"></i> GMProgrammeur <i class="fa fa-copyright w3-hover-text-grey"></i> 2017</p>

	</footer>
 
	<script>

		// Modal Image Gallery
		function onClick(element) {
		  document.getElementById("img01").src = element.src;
		  document.getElementById("modal01").style.display = "block";
		  var captionText = document.getElementById("caption");
		  captionText.innerHTML = element.alt;
		}

		// Change style of navbar on scroll
		window.onscroll = function() {myFunction()};
		function myFunction() {
			var navbar = document.getElementById("myNavbar");
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-orange";
			} else {
				navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-orange", "");
			}
		}

		// Used to toggle the menu on small screens when clicking on the menu button
		function toggleFunction() {
			var x = document.getElementById("navDemo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}

	</script>

</body>
</html>