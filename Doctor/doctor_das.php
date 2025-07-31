<?php
require_once("../database_con/connect.php"); //$conn
// start session
session_start();
//check whether the session variable is present or not
if (!isset($_SESSION['loggedin']) or !isset($_SESSION['refarensid']) or !isset($_SESSION['username']) or !isset($_SESSION['mobileno']) or ($_SESSION['loggedin']) == '' or (trim($_SESSION['refarensid'])) == '' or (trim($_SESSION['username'])) == '' or (trim($_SESSION['mobileno'])) == '') {
    # code...
    header("location: ../login.php");
    exit();
} else {
    # code...
    $get_username = $_SESSION['username'];
    $get_mobileno = $_SESSION['mobileno'];
    $trim_username = strtok($get_username, " ");
    $trim_surename = explode(" ", $get_username);
echo $get_mobileno;

    // Die if connection was not successful
    if (!$conn) {
        $image = "../../images/logo.png";
        echo "<!DOCTYPE HTML><html><head><link rel='icon' type='image/png' sizes='32x32' href='../../images/favicon.ico'/><title>500 Not Found</title></head><body><img src=\"$image\" width=\"250px\" height=\"100px\"/><br>";
        echo "<span style='color:rgba(255,0,0,1);'><b>Oops, something went wrong.</b></span><br><b>500.</b> <span style='color:rgba(0,0,0,0.5);'> That's an internal server error. </span><br><br><br><i>Sorry..!. We cannot proced for internal server error..!.</i><br><span style='color:rgba(255,105,180,1);'>Try to refresh this page or feel free to contact if the problem persists.</span><br>";
        die("<span style='color:rgba(0,0,0,0.5);'> We failed to connect: " . mysqli_connect_error() . " .</span><hr></body></html>");
    }else{

    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doctor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/eemm.png" rel="icon">
  <link href="assets/img/eemm.png" rel="apple-touch-icon">

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
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="">contact@meddoc.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</pan></i>
         
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        
        <img src="assets/img/eemm.png" alt="">
        <h1>MED-DOC<span>/Doctor</span></h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="col-lg-6 order-1 order-lg-2" >
    </div>
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5" >
          
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4 class="title"><a href="Approval.html" class="stretched-link">Schedule</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4 class="title"><a href="Review.html" class="stretched-link">Review</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4 class="title"><a href="doclist.html" class="stretched-link">Approval</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>


  </div>
  </section>
  <!-- End Hero Section -->

  <!--main id="main">

    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Med-DOC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="">GGI STUDENT</a>
      </div>
    </div>

  </footer><!-- End Footer -->
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>