<?php

if (isset($_POST["Submit"])) {


	// 1. Sanitization
	$prenomsani = filter_var($_POST["Name"], FILTER_SANITIZE_STRING);

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

	<title>GMProgrammeur</title>

	<meta charset="UTF-8">
	<meta name="description" content="Site personel de Geoffrey Marique, programmeur, développeur.">
  	<meta name="keywords" content="HTML5,CSS3,JavaScript">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
		body, html {
			height: 100%;
			color: #777;
			line-height: 1.8;
		}

		/* Create a Parallax Effect */
		.bgimg-1, .bgimg-2, .bgimg-3 {
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		/* First image (Logo. Full height) */
		.bgimg-1 {
			background-image: url("gmpban1.jpg");
			min-height: 100%;
		}

		/* Second image (Portfolio) */
		.bgimg-2 {
			background-image: url("gmpban2.jpg");
			min-height: 400px;
		}

		/* Third image (Contact) */
		.bgimg-3 {
			background-image: url("gmpban3.jpg");
			min-height: 400px;
		}

		.w3-wide {letter-spacing: 5px;}
		.w3-hover-opacity {cursor: pointer;}

		/* Turn off parallax scrolling for tablets and phones */
		@media only screen and (max-device-width: 1024px) {
			.bgimg-1, .bgimg-2, .bgimg-3 {
				background-attachment: scroll;
			}
		}

	</style>
</head>
<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">

	  <div class="w3-bar" id="myNavbar">

		<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

		<a href="#gmp" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> GMP</a>

		<a href="#apropos" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question"></i> A PROPOS</a>

		<a href="#projet" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PROJET</a>

		<a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>

		<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">EN</a>

		<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">NL</a>

	  </div>

	  <!-- Navbar on small screens -->
	  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">

		<a href="#apropos" class="w3-bar-item w3-button" onclick="toggleFunction()">A PROPOS</a>

		<a href="#projet" class="w3-bar-item w3-button" onclick="toggleFunction()">PROJET</a>

		<a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>

		<a href="#" class="w3-bar-item w3-button" onclick="toggleFunction()">NL</a>

		<a href="#" class="w3-bar-item w3-button" onclick="toggleFunction()">EN</a>

	  </div>

	</div>

	<!-- First Parallax Image with Logo Text -->
	<div class="bgimg-1 w3-display-container w3-opacity-min" id="gmp">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><i class="fa fa-desktop w3-hover-text-grey"></i> Geoffrey Marique</h1>

	  </div>

	</div>

	<!-- Container (About Section) -->
	<div class="w3-content w3-container w3-padding-64" id="apropos">

	  <h3 class="w3-center"><i class="fa fa-question w3-hover-text-black"></i> A PROPOS</h3>

	  <p class="w3-center"><em>Programmeur | Développeur</em></p>

	  <p>Passionné par le monde informatique et technologique, principalement la création de site internet (Ordinateur, tablette, telephone),<br>je suis toujours motivé pour mener a bien de nouveau projets, pour se faire, je m'informe et me forme continuellement.</p>

	  <div class="w3-row">

		<div class="w3-col m6 w3-center w3-padding-large">

		  <p><b><i class="fa fa-user w3-margin-right w3-hover-text-black"></i>Geoffrey Marique</b></p>

		  <br>

		  <img src="gmppho.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Photo" style="width: 216px; height: 358px;">

		</div>

		<!-- Hide this text on small devices -->
		<div class="w3-col m6 w3-padding-large">

		  <p style="margin-top: 80px;">Expérience: <a href="http://www.becode.org/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>BeCode</b></a>, <a href="https://simplon.co/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>Simplon</b></a>, <a href="http://www.croix-rouge.be/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>Croix-Rouge</b></a>

		  <br>

		  Stage:

		  <br>

		  Formation: <a href="http://www.becode.org/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>BeCode</b></a>, <a href="https://simplon.co/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>Simplon</b></a>, <a href="https://www.freecodecamp.org/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>freeCodeCamp</b></a>

		  <br>

		  Certificat: <a href="https://www.freecodecamp.org/gmprogrammeur/front-end-certification" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>Front End Development Certification</b></a>

		  <br>

		  Bénévolat: <a href="http://www.croix-rouge.be/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>Croix-Rouge</b></a>

		  <br>

		  Evénement: <a href="http://www.hackbelgium.be/" target="_blank" class="w3-hover-text-black" style="text-decoration: none;"><b>HackBelgium</b></a></p>

		</div>

	  </div>

	  <p class="w3-large w3-center w3-padding-16">Compétence:</p>

	  <p class="w3-wide"><i class="fa fa-image w3-hover-text-black"></i> GIMP INKSCAPE</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-laptop w3-hover-text-black"></i> HTML5 CSS3 JAVASCRIPT BOOTSTRAP JQUERY</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">

		50%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-laptop w3-hover-text-black"></i> PHP SQL JAVASCRIPT SYMFONY PHPMYADMIN NODE.JS GIT</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-laptop w3-hover-text-black"></i> WORDPRESS</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-search w3-hover-text-black"></i> MOTEUR DE RECHERCHE</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-line-chart w3-hover-text-black"></i> PERFORMANCE</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	  <p class="w3-wide"><i class="fa fa-lock w3-hover-text-black"></i> SECURITE</p>

	  <div class="w3-light-grey">

		<div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">

		25%

		</div>

	  </div>

	</div>

	<div class="w3-row w3-center w3-dark-grey w3-padding-16">

	  <div class="w3-quarter w3-section">

		<span class="w3-xlarge">1+</span>

		<br>

		Projets internes

	  </div>

	  <div class="w3-quarter w3-section">

		<span class="w3-xlarge">3+</span>

		<br>

		Projets externes

	  </div>

	  <div class="w3-quarter w3-section">

		<span class="w3-xlarge">1+</span>

		<br>

		Bénévolats

	  </div>

	  <div class="w3-quarter w3-section">

		<span class="w3-xlarge">1+</span>

		<br>

		Evénements

	  </div>

	</div>

	<!-- Second Parallax Image with Portfolio Text -->
	<div class="bgimg-2 w3-display-container w3-opacity-min">

	  <div class="w3-display-middle">

		<span class="w3-xxlarge w3-wide w3-text-black"><i class="fa fa-th w3-hover-text-grey"></i> PROJET</span>

	  </div>

	</div>

	<!-- Container (Portfolio Section) -->
	<div class="w3-content w3-container w3-padding-64" id="projet">

	  <h3 class="w3-center"><i class="fa fa-th w3-hover-text-black"></i> PROJET</h3>

	  <p class="w3-center"><em>Voicis mes projets internes/externes, du plus au moins récents.</em></p>

	  <br>

	  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
	  <div class="w3-row-padding w3-center">

		<div class="w3-col m3">

		  <img src="gmpproint1.jpg" style="width:100%; height: auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet interne N1 2017">

		  <a href="http://www.gmprogrammeur.be/" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>www.gmprogrammeur.be</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height: auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height: auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height: auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

	  </div>

	  <div class="w3-row-padding w3-center w3-section">

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height:auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height:auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height:auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<div class="w3-col m3">

		  <img src="gmpnoupro.jpg" style="width:100%; height: auto;" onclick="onClick(this)" class="w3-hover-opacity" alt="Projet">

		  <a href="#" target="_blank" class="w3-hover-opacity" style="text-decoration: none;"><b>Projet</b></a>

		</div>

		<a href="#" class="w3-button w3-padding-large w3-grey" style="margin-top:64px">PLUS DE <i class="fa fa-th"></i> PROJET</a>
		
	  </div>

	</div>

	<!-- Modal for full size images on click-->
	<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">

	  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>

	  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">

		<img id="img01" class="w3-image" alt="img01">

		<p id="caption" class="w3-opacity w3-large"></p>

	  </div>

	</div>

	<!-- Third Parallax Image with Portfolio Text -->
	<div class="bgimg-3 w3-display-container w3-opacity-min">

	  <div class="w3-display-middle">

		<span class="w3-xxlarge w3-wide w3-text-black"><i class="fa fa-envelope w3-hover-text-grey"></i> CONTACT</span>

	  </div>

	</div>

	<!-- Container (Contact Section) -->
	<div class="w3-content w3-container w3-padding-64" id="contact">

	  <h3 class="w3-center"><i class="fa fa-envelope w3-hover-text-black"></i> CONTACT</h3>

	  <p class="w3-center"><em><i class="fa fa-thumbs-up w3-hover-text-black"></i> Je lis et réponds aux messages.</em></p>

	  <div class="w3-row w3-padding-32 w3-section">

		<div class="w3-col m4 w3-container">

			<!-- Add Google Maps -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161254.25108473309!2d4.222978107455484!3d50.83861573727958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c486740f9fff%3A0x10099ab2f4c8030!2sBrussels%2C+Belgium!5e0!3m2!1sen!2sus!4v1507072820200" width="100%" height="300" frameborder="0" style="border:0" name="Map" alt="Map" allowfullscreen></iframe>

		</div>

		<div class="w3-col m8 w3-panel">

		  <div class="w3-large w3-margin-bottom">

			<i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Bruxelles, Belgique

			<br>

			<i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> +32 489 89 22 19

			<br>

			<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> gmprogrammeur@gmail.com

			<br>

		  </div>

		  <form action="" method="POST">

			<div class="w3-row-padding" style="margin:0 -16px 8px -16px">

			  <div class="w3-half">

				<input class="w3-input w3-border" type="text" placeholder="Nom" name="Name" required>

			  </div>

			  <div class="w3-half">

				<input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required>

			  </div>

			</div>

			<input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required>

			<button class="w3-button w3-black w3-right w3-section" type="submit" name="Submit">
			  <i class="fa fa-paper-plane"></i> ENVOYER
			</button>

		  </form>

		</div>

	  </div>

	</div>

	<!-- Footer -->
	<footer class="w3-center w3-dark-grey w3-padding-64 w3-hover-black">

		<a href="#gmp" class="w3-button w3-grey w3-hover-light-grey"><i class="fa fa-desktop w3-margin-right"></i> GMP <i class="fa fa-caret-up w3-margin-left"></i></a>

		<div class="w3-xlarge w3-section">

			<p><a href="https://www.linkedin.com/in/geoffrey-marique/" target="_blank"><i class="fa fa-linkedin w3-hover-text-grey"></i></a>

			<br>

			<i class="fa fa-laptop w3-hover-text-grey"></i> <i class="fa fa-tablet w3-hover-text-grey"></i> <i class="fa fa-mobile w3-hover-text-grey"></i>

			<br>

			gmprogrammeur <i class="fa fa-copyright w3-hover-text-grey"></i> 2017 </p>

		</div>

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
				navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
			} else {
				navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
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