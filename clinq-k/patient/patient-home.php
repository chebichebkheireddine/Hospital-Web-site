<?php
  session_start();

  if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location: ../login.php');
  }
  
  include_once('oop/patient_login.php');

  $user = new Patient();
  $sql = "SELECT * FROM patient WHERE id = '".$_SESSION['user']."'";
  $row = $user->details($sql);
  $doctors = $user->displaysDoctorslimt();
 
?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>sahla</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
  <link href="assets/css/patient.css?v=<?php echo time(); ?>" rel="stylesheet">
  <!-- ====  REMIXICON CDN ==== -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--main template css file -->
  <link rel="stylesheet" href="../css/index.css">
  <!-- Render All Elements Normally (عرض جميع العناصر بشكل طبيعي)-->
  <link rel="stylesheet" href="../css/normalize.css">
  <!-- Font Awesome Library (الايقونات imoji) -->
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <!--icon(علامة ايقون الذي يظهر في المتصفح)-->
  <link rel="shortcut icon" type="image/x-icon" href="images/logoM.png" />
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;800&display=swap"
    rel="stylesheet">

</head>

<body>

  <?php include "sections/header.php" ?>

  <?php include "sections/main.php" ?>

  <?php include "sections/footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/js/patient.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>