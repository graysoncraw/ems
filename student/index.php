<?php
session_start();

if($_SESSION['role'] != "S")
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Courses</a></li>
          <li><a class="nav-link scrollto" href="#team">Faculty</a></li>
          <li><a class="nav-link" href="courseregister.php">Course Registration</a></li>
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
          <h2>Details | Courses | Faculty</h2>
          
        </div>
      </div>

      <div class="row icon-boxes">


        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">

        </div>

        <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">Student Profile</a></h4>
            <?php
              include("../db_connection.php");
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM Student_tab s, Users_tab u WHERE s.student_id = $id && u.id = $id";
              
              $result=$connect->query($sql);
              $row = $result->fetch_assoc(); 
            ?>
            <p class="description">Name: <?php echo $row['student_name'];?></p>
            <p class="description">ID: <?php echo $row['student_id'];?></p>
            <p class="description">Major: <?php echo $row['student_major'];?></p>
            <p class="description">GPA: <?php echo $row['CGPA'];?></p>
            <p class="description">Graduation Year: <?php echo $row['grad_year'];?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">Settings</a></h4>
            <p class="description"><a href="#">Change Username</a></p>
            <p class="description"><a href="#">Change Password</a></p>
            <p class="description"><a href="#">Contact Front Desk</a></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">

        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Listed here are new courses. To see all courses, click the button below these course.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="fa fa-terminal" aria-hidden="true"></i>
              </div>
                <?php
                $sql = "SELECT * FROM Courses_tab WHERE sid = 1";
                $result=$connect->query($sql);
                $row = $result->fetch_assoc(); 
              
                echo "<h4><a href=''>$row[course_name]</a></h4>";
                echo "<p>Course ID: $row[course_id]</p>";
                echo "<p>Taught By: $row[fac_id]</p>";
                echo "<p>Offered In: $row[offered_in]</p>";
                echo "<p>Credits: $row[credits]</p>";
                echo "<p>Pre-Requisites: $row[pre_req]</p>";
                ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="fa fa-shield" aria-hidden="true"></i>
              </div>
                <?php
                  $sql = "SELECT * FROM Courses_tab WHERE sid = 2";
                  $result=$connect->query($sql);
                  $row = $result->fetch_assoc(); 
                
                  echo "<h4><a href=''>$row[course_name]</a></h4>";
                  echo "<p>Course ID: $row[course_id]</p>";
                  echo "<p>Taught By: $row[fac_id]</p>";
                  echo "<p>Offered In: $row[offered_in]</p>";
                  echo "<p>Credits: $row[credits]</p>";
                  echo "<p>Pre-Requisites: $row[pre_req]</p>";
                  ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="fa fa-book" aria-hidden="true"></i>
              </div>
                <?php
                  $sql = "SELECT * FROM Courses_tab WHERE sid = 3";
                  $result=$connect->query($sql);
                  $row = $result->fetch_assoc(); 
                
                  echo "<h4><a href=''>$row[course_name]</a></h4>";
                  echo "<p>Course ID: $row[course_id]</p>";
                  echo "<p>Taught By: $row[fac_id]</p>";
                  echo "<p>Offered In: $row[offered_in]</p>";
                  echo "<p>Credits: $row[credits]</p>";
                  echo "<p>Pre-Requisites: $row[pre_req]</p>";
                  ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="fa fa-paint-brush" aria-hidden="true"></i>
              </div>
                <?php
                  $sql = "SELECT * FROM Courses_tab WHERE sid = 4";
                  $result=$connect->query($sql);
                  $row = $result->fetch_assoc(); 
                
                  echo "<h4><a href=''>$row[course_name]</a></h4>";
                  echo "<p>Course ID: $row[course_id]</p>";
                  echo "<p>Taught By: $row[fac_id]</p>";
                  echo "<p>Offered In: $row[offered_in]</p>";
                  echo "<p>Credits: $row[credits]</p>";
                  echo "<p>Pre-Requisites: $row[pre_req]</p>";
                  ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="fa fa-heartbeat" aria-hidden="true"></i>
              </div>
                <?php
                  $sql = "SELECT * FROM Courses_tab WHERE sid = 5";
                  $result=$connect->query($sql);
                  $row = $result->fetch_assoc(); 
                
                  echo "<h4><a href=''>$row[course_name]</a></h4>";
                  echo "<p>Course ID: $row[course_id]</p>";
                  echo "<p>Taught By: $row[fac_id]</p>";
                  echo "<p>Offered In: $row[offered_in]</p>";
                  echo "<p>Credits: $row[credits]</p>";
                  echo "<p>Pre-Requisites: $row[pre_req]</p>";
                  ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="fa fa-university" aria-hidden="true"></i>
              </div>
                <?php
                  $sql = "SELECT * FROM Courses_tab WHERE sid = 6";
                  $result=$connect->query($sql);
                  $row = $result->fetch_assoc(); 
                
                  echo "<h4><a href=''>$row[course_name]</a></h4>";
                  echo "<p>Course ID: $row[course_id]</p>";
                  echo "<p>Taught By: $row[fac_id]</p>";
                  echo "<p>Offered In: $row[offered_in]</p>";
                  echo "<p>Credits: $row[credits]</p>";
                  echo "<p>Pre-Requisites: $row[pre_req]</p>";
                  ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Courses Section -->

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
            $major = $_SESSION['major'];
            $sql = "SELECT * FROM Faculty_tab f, Student_tab s WHERE s.student_major = '$major' AND f.department = '$major'";
            $result=$connect->query($sql);
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