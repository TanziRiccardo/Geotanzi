<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Airspace | Creative Agency Bootstrap Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Agency Bootstrap Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Airspace Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


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

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

  <!-- Header Start -->
  <?php
  $username = $_POST['email-cliente'];
  $password = $_POST['pwd-cliente'];
  echo $username;
  $pwdcrypt = crypt($password, '$1$rasmusle$');
  echo $pwdcrypt;
  $user = "geotanzi";
  $pass = "3mAFBRwjy3tt";
  $database = "my_geotanzi";

  // Create connection
  $conn = new mysqli("localhost", $user, $pass, $database);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT utentecapo, passwordutente FROM superutente WHERE utentecapo='$username' AND passwordutente='$pwdcrypt'";
  $risultato = mysqli_query($conn, $query);
  $row = mysqli_num_rows($risultato);
  $query2 = "UPDATE superutente SET attivo = 1 WHERE utentecapo = '$username'";
  $risultato2 = mysqli_query($conn, $query2);
  if ($row == 1){
    
    header('Location: blog-grid.php?utente='.$username);
  } else {
    header('Location: 404.html');
  }


  $conn->close();
  ?>

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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/map.js"></script>

  <script src="js/script.js"></script>

</body>

</html>