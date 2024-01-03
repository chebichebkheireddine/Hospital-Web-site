<?php
  session_start();

  if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
    header('location: ../login.php');
  }

  include_once('oop/doctor_function.php');

  $user = new Doctor();
  $sql = "SELECT * FROM doctor WHERE id = '".$_SESSION['admin']."'";
  $row = $user->details($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">

  	<title>adminMed - Home</title>

  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  	<link href="assets/css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

	<?php include 'section/header.php' ?>

  <main id="main">
        <section id="home" class="d-flex align-items-center">
      <div class="container">
        <h1>Welcome Back, <br><span>Admin</span></h1>
        <h2>Improve our services for our staff and <br> patients
          alike. Thank you for your services, <br> admin. Start managing now!</h2>
      </div>
    </section>


    </main>

    <script src="assets/js/admin.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>