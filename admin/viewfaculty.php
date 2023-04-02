<?php
session_start();

if($_SESSION['role'] != "A")
  {
    session_unset();
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

  <title>Add Faculty</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li><a class="nav-link scrollto" href="">Home</a></li>
          <li class="dropdown active"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>View Faculty</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>View Faulty</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Faculty Section ======= -->
      <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Faculty</h2>
          <p>Listed here are the faculty members corresponding to your major.</p>
        </div>

        <div class="row">

        <?php
            $count = 100;
            $sql = "SELECT * FROM Faculty_tab";
            $result = $connect->query($sql);
            while($row = $result->fetch_assoc()){
              echo "<div class='col-lg-3 col-md-6 d-flex align-items-stretch' data-aos='fade-up' data-aos-delay='$count'>";
              echo "<div class='member'>";
              echo "<div class='member-img'>";
              echo "<img src='assets/img/$row[image]' class='img-fluid' alt=''>";
              echo "<div class='social'>";
              echo "<a href=''><i class='bi bi-twitter'></i></a>";
              echo "<a href=''><i class='bi bi-facebook'></i></a>";
              echo "<a href=''><i class='bi bi-instagram'></i></a>";
              echo "<a href=''><i class='bi bi-linkedin'></i></a>";
              echo "</div>";
              echo "</div>";
              echo "<div class='member-info'>";
              echo "<h4>$row[fac_name]</h4>";
              echo "<span>Department: $row[department]</span>";
              echo "<span>Qualification: $row[qualification]</span>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              $count += 100;
            }
            ?>
        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

<?php include("footer.php");?>

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