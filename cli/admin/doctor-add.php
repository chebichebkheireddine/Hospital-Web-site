<?php
  session_start();

  if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
    header('location: ../login.php');
  }

  include 'oop/doctor_function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <title>appointMed</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href= "assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href= "assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href= "assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/css/admin-profile.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="assets/css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">                                                           
</head>

<body>

  <?php
    $user = new Doctor();
    if (isset($_POST['insert'])){
      $user->insertDoctor($_POST['name'], $_POST['field'], $_POST['email'], $_POST['password']);
    }
  ?>

  <?php include "section/header.php" ?> 
  
  <section id="profile" class="d-flex">
		<div class="container">

		<div class="section-appointment1">
			<h3>Add <span>Doctor</span></h3>
			<p>Fill out the form below to add doctor.</p>
			</div>
	
		</div>
		</section>

      <div class="wrapper bg-white mt-sm-5">
          <h4 class="pb-4 border-bottom">Doctor Information</h4>
          <form method="post">
            <div class="py-2">

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="name"></label> <input type="text"  id="textsend1" name="name" class="bg-light form-control" placeholder="Name" required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Field"></label> <input type="text"  id="textsend2" name = "field" class="bg-light form-control" placeholder="Field" required> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="Email"></label> <input type="email"  id="textsend3" name = "email" class="bg-light form-control" placeholder="Email" required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Pass"></label> <input type="password"  id="textsend4" name="password" class="bg-light form-control" placeholder="Password" required> </div>
                </div>

                </div>
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="insert" name="insert" formmethod="post">Add Doctor</button> </div>

          </form>
          </div>
      </div>

  <script src="assets/js/admin.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>