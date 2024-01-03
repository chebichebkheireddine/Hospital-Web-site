<?php
  session_start();

  if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
    header('location: ../login.php');
  }

  include 'oop/doctor_function.php';

  $id = $_GET['id'];
  $user = new Doctor();
  $sql = "SELECT * FROM doctor WHERE id = '$id'";
  $row = $user->details($sql);

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

    if (isset($_POST['update'])){
      
      $user->updateDoctor($id, $_POST['name'], $_POST['field'], $_POST['email'], $_POST['password']);
    
    }
  ?>

  <?php include "section/header.php" ?> 
  
  <section id="profile" class="d-flex">
		<div class="container">

		<div class="section-appointment1">
			<h3>Update <span>Profile</span></h3>
			<p>Down below is the doctor personal information.</p>
			</div>
	
		</div>
		</section>

      <div class="wrapper bg-white mt-sm-5">
          <h4 class="pb-4 border-bottom">Doctor Information</h4>
          <form method="post">
            <div class="py-2">

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="name">Name</label> <input type="text"  id="textsend1" name="name" class="bg-light form-control" placeholder=<?php echo $row['name'] ?> onkeyup="success1()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Field">Field</label> <input type="text"  id="textsend2" name = "field" class="bg-light form-control" placeholder=<?php echo $row['Field'] ?> onkeyup="success2()"> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="Email">Email</label> <input type="email"  id="textsend3" name = "email" class="bg-light form-control" placeholder=<?php echo $row['Email'] ?> onkeyup="success3()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Pass">Password</label> <input type="password"  id="textsend4" name="password" class="bg-light form-control" placeholder=<?php echo $row['Pass'] ?> onkeyup="success4()"> </div>
                </div>

                </div>
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="update" name="update" onclick="return confirm('Are you sure you want to save changes?')" formmethod="post" disabled>Save Changes</button> </div>

          </form>
          </div>
      </div>

  <script src="assets/js/admin.js"></script>
  <script src="assets/js/check.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>