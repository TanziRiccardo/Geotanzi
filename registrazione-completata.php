<?php
$username = $_POST['email-cliente'];
$password = $_POST['pwd-cliente'];
$iddevice = $_POST['id-device'];
$pwdcrypt = crypt($password, '$1$rasmusle$');
$user = "geotanzi";
$pass = "3mAFBRwjy3tt";
$database = "my_geotanzi";


// Create connection
$conn = new mysqli("localhost", $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$querycontrollo = "SELECT utentecapo, passwordutente FROM superutente WHERE utentecapo='$username' AND passwordutente='$pwdcrypt'";
$risultatocontrollo = mysqli_query($conn, $querycontrollo);
$row = mysqli_num_rows($risultatocontrollo);
if ($row == 1) {
  ?>
  <!DOCTYPE html>


<html>
<head id="head">

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Geo Tanzi</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Agency Bootstrap Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="theme-name" content="airspace">
  <meta name="generator" content="Themefisher Airspace Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/terra.ico" />


  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/font-size/font-size.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Header Start -->
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg p-0">
					<a class="navbar-brand" href="index.html">
						<img src="images/logo-home-gray.png" alt="Logo">
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ion-android-menu"></span>
					</button>

					<div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item @@service"><a class="nav-link" href="areariservata.html"><img src ="images/chiave.png">Area Riservata</a></li>
							
							<li class="nav-item @@contact"><a class="nav-link" href="contact.html">Contatti</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header><!-- header close -->

<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="animated fadeInUp">Geo Tanzi <br> Geolocalizzatore</h1>
					<p class="animated fadeInUp">Tieni al sicuro e sotto controllo le persone a te care </br> <b>Prova Geo Tanzi</b></p>
					<a href="https://drive.google.com/file/d/1-ko9u7ZI3gN08SqYgGsc8vqO2scdsuhP/view?usp=sharing" class="btn btn-main animated fadeInUp"  >Scarica</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Wrapper Start -->
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="block">
					<div class="section-title">
						<h2>Geo Tanzi</h2>
						<p>Geo Tanzi è l'applicazione per tenere al sicuro i tuoi cari e controllare dove si trovano.</p>
					</div>
					<p>Geo Tanzi è stata pensata per coloro che hanno in famiglia persone che effettuano sport "estremi/pericolosi", così da poter sapere dove si trovano i propri cari e rimanere tranquilli.
             Oppure può essere usata come applicazione "spia" e quindi un genitore può installare Geo Tanzi nel cellulare del figlio che ha iniziato ad uscire con un gruppo di amici 
             e nasconderla così da poter controllare che luoghi frequenta, dove va con gli amici, se può essere in una situazione di "pericolo"... </p> <br> <br>
				</div>
			</div><!-- .col-md-7 close -->
			<div class="col-md-5">
				<div class="block">
					<img src="images/geolocalizzazione.png" alt="Img">
				</div>
			</div><!-- .col-md-5 close -->
		</div>
	</div>
</section>

<section class="feature bg-2">
  <div class="container"  >
   
  </div>
</section>



<!-- Footer 2 - Bootstrap Brain Component -->
<footer class="footer">

	<!-- Widgets - Bootstrap Brain Component -->
	<section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
	  <div class="container overflow-hidden">
		<div class="row gy-4 gy-lg-0 justify-content-xl-between">
		  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
			<div class="widget">
			  <a href="#!">
				<img src="images/terra.ico" alt="Geo Tanzi logo" width="150" height="100">
			  </a>
			</div>
		  </div>
		  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
			<div class="widget">
			  <h4 class="widget-title mb-4">Dove siamo</h4>
			  <address class="mb-4">Via dei Grilli, 06012, Città di Castello, Perugia, Umbria</address>
			  <p class="mb-1">
				<a class="link-secondary text-decoration-none" href="tel:+393895579108">(+39)3895579108</a>
			  </p>
			  <p class="mb-0">
				<a class="link-secondary text-decoration-none" href="mailto:servizioclienti@geotanzi.it">servizioclienti@geotanzi.it</a>
			  </p>
			</div>
		  </div>
		  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
			<div class="widget">
			  <h4 class="widget-title mb-4">Link Utili</h4>
			  <ul class="list-unstyled">
				<li class="mb-2">
				  <a href="#!" class="link-secondary text-decoration-none">Area Riservata</a>
				</li>
				<li class="mb-2">
				  <a href="#!" class="link-secondary text-decoration-none">Contattaci</a>
				</li>
				<li class="mb-2">
				  <a href="#!" class="link-secondary text-decoration-none">FAQ</a>
				</li>
			  </ul>
			</div>
		  </div>
		  <div class="col-12 col-lg-3 col-xl-4">
			<div class="widget">
			  <h4 class="widget-title mb-4">Ricevi aggiornamenti di Geo Tanzi</h4>
			  <p class="mb-4">Iscriviti</p>
			  <form action="#!">
				<div class="row gy-4">
				  <div class="col-12">
					<div class="input-group">
					  <span class="input-group-text" id="email-newsletter-addon">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
						  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
						</svg>
					  </span>
					  <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Indirizzo Email" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
					</div>
				  </div>
				  <div class="col-12">
					<div class="d-grid">
					  <button class="btn btn-primary" type="submit">Iscriviti</button>
					</div>
				  </div>
				</div>
			  </form>
			</div>
		  </div>
		</div>
	  </div>
	</section>
  
	<!-- Copyright - Bootstrap Brain Component -->
	<div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
	  <div class="container overflow-hidden">
		<div class="row gy-4 gy-md-0 align-items-md-center">
		  <div class="col-xs-12 col-md-7 order-1 order-md-0">
			<div class="copyright text-center text-md-start">
			  &copy; 2024. All Rights Reserved. Tanzi Riccardo
			</div>
		  </div>
  
		  <div class="col-xs-12 col-md-5 order-0 order-md-1">
			<div class="social-media-wrapper">
			  <ul class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-md-end">
				<li class="me-3">
				  <a href="#!" class="link-dark link-opacity-75-hover">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
					  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
					</svg>
				  </a>
				</li>
				<li class="me-3">
				  <a href="#!" class="link-dark link-opacity-75-hover">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
					  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
					</svg>
				  </a>
				</li>
				<li class="me-3">
				  <a href="#!" class="link-dark link-opacity-75-hover">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
					  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
					</svg>
				  </a>
				</li>
				<li class="">
				  <a href="#!" class="link-dark link-opacity-75-hover">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
					  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
					</svg>
				  </a>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  
  </footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
	<span class="icon ion-ios-arrow-up"></span>
</div>

    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>
     
    <script src="js/script.js"></script>

    </body>

    </html>
   
<?php
  echo "<script> window.location.href='areariservata.html'; alert('Ciao $username sei gia registrato. Effettua il login'); </script>"; 
} else {
  $query = "INSERT INTO superutente (utentecapo, passwordutente,utentefiglio) VALUES ('$username', '$pwdcrypt', '$iddevice')";
  $risultato = mysqli_query($conn, $query);
  echo $risultato;
  if ($risultato) {

    header('Location: areariservata.html');
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
$conn->close();
