<?php
  session_start();

  if(($_SESSION['role'] != "A"))
    {
      echo "<html>";
      echo "<head>";
      include("styling.php");
      echo "<link href='assets/css/errorpage.css' rel='stylesheet'>";
      echo "</head>";
      echo "<body>";
      echo "<a class='errormessage' href='../index.php'> Whoops, you accessed the wrong page. <br> Click this text to relog. </a>";
      include("../footer.php");
      echo "</body></html>";
        }
  else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include("styling.php"); ?>

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">EMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="viewfaculty.php">View Faculty</a></li>
              <li><a href="#">View Students</a></li>
            </ul>
          </li>          
          <li class="dropdown"><a href="#"><span>Add</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Add Department</a></li>
              <li><a href="#">Add Course</a></li>
              <li><a href="#">Add Student</a></li>
              <li><a href="#">Add Faculty</a></li>
            </ul>
          </li>
          <li><a class="getstarted" href="../logout.php">Log Out</a></li>        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Welcome back, <?php echo $_SESSION['name'];?></h1>
          <h2>Options</h2>
          
        </div>
      </div>

      <div class="row icon-boxes">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">

      </div>

      <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <h4 class="title"><a href="">View</a></h4>
          <p class="description"><a href="viewfaculty.php">View Faculty</a></p>
          <p class="description"><a href="#">View Students</a></p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
        <div class="icon-box">
          <div class="icon"><i class="fa fa-gears" aria-hidden="true"></i></div>
          <h4 class="title"><a href="">Add</a></h4>
          <p class="description"><a href="#">Add Department</a></p>
          <p class="description"><a href="#">Add Course</a></p>
          <p class="description"><a href="#">Add Student</a></p>
          <p class="description"><a href="#">Add Faculty</a></p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">

      </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <?php require("footer.php");?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
  }
?>