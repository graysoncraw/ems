<?php 
  session_start();
  if($_SESSION['role'] == "S")
  {
    header('location: student/index.php');
  }
  elseif($_SESSION['role'] == "F")
  {
    header('location: faculty/index.php');
  }
  elseif($_SESSION['role'] == "A")
  {
    header('location: admin/index.php');
  }
  else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EMS - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<?php include("styling.php");?>

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <section id="login" class="pricing">
      <div class="container">

        <div class="row">

        <center>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
            <form method="POST" action="redirect.php">
                <h1> Login </h1>
                <input class="name" id="username" name="username" type="text" placeholder="Username"/>
                <input class="name" id="password" name="password" type="password" placeholder="Password"/>
                <label><strong>Enter Captcha:</strong></label><br />
                <input type="text" name="captcha" />
                <p><br />
                <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
                </p>
                <p>Can't read the image?
                <a href='javascript: refreshCaptcha();'>click here</a>
                to refresh</p>
                <?php
                  if (isset($_SESSION['message']))
                  {
                      echo $_SESSION['message'];
                      unset($_SESSION['message']);
                  }
                ?>
                <div id="cta" class="cta">
                    <button type="submit" name="submit" value="Submit" class="cta-btn">Login</a>
                </div>
            </form>
            </div>
          </div>
          </center>
        </div>
      </div>
    </section>

  <!-- Footer -->
  <?php include("footer.php"); ?>

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
<?php } ?>