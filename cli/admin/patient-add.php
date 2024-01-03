<?php
  session_start();

  if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
    header('location: ../login.php');
  }

  include 'oop/patient_function.php';

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
    $user = new Patient();
    if (isset($_POST['insert'])){
      $user->insertPatient($_POST['fname'], $_POST['lname'], $_POST['bday'], $_POST['email'], $_POST['pass']);
    }
  ?>

  <?php include "section/header.php" ?> 
  
  <section id="profile" class="d-flex">
		<div class="container">

		<div class="section-appointment1">
			<h3>Add <span>Patient</span></h3>
			<p>Fill out the form below to add patient.</p>
			</div>
	
		</div>
		</section>

      <div class="wrapper bg-white mt-sm-5">
          <h4 class="pb-4 border-bottom">Patient Information</h4>
          <form method="post">
            <div class="py-2">

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="fname"></label> <input type="text"  id="textsend1" name="fname" class="bg-light form-control" placeholder="First Name" required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lname"></label> <input type="text"   name = "lname" class="bg-light form-control" placeholder="Last Name" required> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="bday"></label> <input type="text" name = "bday" class="bg-light form-control" placeholder="Birthday" onfocus="(this.type='date')"  min="1900-01-01" max="2003-12-31" required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="email"></label> <input type="email"  name="email" class="bg-light form-control" placeholder="Email" required> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="pass"></label> <input type="password" name="pass" class="bg-light form-control" placeholder="Password" required> </div>
                </div>
        

                </div>
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="insert" name="insert" formmethod="post">Add Patient</button> </div>

          </form>
          </div>
      </div>


  <script src="assets/js/admin.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>