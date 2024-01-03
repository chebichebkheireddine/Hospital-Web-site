<?php
  include 'oop/doctor-function.php';
  session_start();

  if (!isset($_SESSION['doctor']) ||(trim ($_SESSION['doctor']) == '')){
    header('location: ../login.php');
  } 

  $user = new Doctor();
  $sql = "SELECT * FROM doctor WHERE ID = '".$_SESSION['doctor']."'";
  $row = $user->details($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>appointMed</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>
  <link href="assets/css/doctor.css?v=<?php echo time(); ?>" rel="stylesheet">
  

</head>
<body>



<?php include 'section/header.php' ?>

  <section id="home" class="d-flex align-items-center">
      <div class="container">
        <h1>Welcome back,<br><span><?php echo $row['name'] ?></span></h1>
        <h2>If you wish to view your upcoming schedule, <br>click the button below.</h2>
        <div class="nav-link scrollto">
          <a href="doctor-view.php" class="btn-appoint">View schedule</a>
        </div>
      </div>
    </section>

  <script src="assets/js/index.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/doctor.js"></script>

</body>
</html>