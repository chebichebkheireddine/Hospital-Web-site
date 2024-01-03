<?php
  include 'oop/appointment.php';
  session_start();

  if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location: ../login.php');
  } 

  $user = new Patient();
  $sql = "SELECT * FROM patient WHERE id = '".$_SESSION['user']."'";
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

  <link href="assets/css/patient.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="assets/css/patient-profile.css?v=<?php echo time(); ?>" rel="stylesheet">                                                           
</head>

<body>

  <?php
    include 'oop/patient-profile.php';

    $update = new Update();
    if (isset($_POST['update'])){
      $update->updatePatient($_POST['FName'], $_POST['LName'], $_POST['bday'], $_POST['password'], $row['id']);
    }

    if (isset($_POST['delete'])){
      $update->delete($row['id']);
    }
    
  ?>

  <?php include "sections/header.php" ?> 
  
  <section id="appointment" class="d-flex">
		<div class="container">

		<div class="section-appointment">
			<h3>View <span>Profile</span></h3>
			<p>Down below are your personal information.</p>
			</div>
	
		</div>
		</section>

      <div class="wrapper bg-white mt-sm-5">
          <h4 class="pb-4 border-bottom">Account settings</h4>
          <form method="post">
            <div class="py-2">

                <div class="row py-2">
                    <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text"  id="textsend1" name="FName" class="bg-light form-control" placeholder=<?php echo $row['FName'] ?> onkeyup="success1()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text"  id="textsend2" name = "LName" class="bg-light form-control" placeholder=<?php echo $row['LName'] ?> onkeyup="success2()"> </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6"> <label for="birthday">Birthday</label> <input type="text"  id="textsend3" name = "bday" class="bg-light form-control" placeholder=<?php echo $row['Bday'] ?> onfocus="(this.type='date')"  min="1900-01-01" max="2003-12-31"  onkeyup="success3()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="password">Password</label> <input type="password"  id="textsend4" name="password" class="bg-light form-control" placeholder=<?php echo $row['Pass'] ?> pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  onkeyup="success4()"> </div>
                </div>

                </div>
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="update" name="update" onclick="return confirm('Are you sure you want to save changes?')" formmethod="post" disabled>Save Changes</button> </div>


                <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                    <div> <b>Deactivate your account</b>
                        <p>If you wish to delete your account.</p>
                    </div> 
                    <div class="ml-auto"> <button class="btn danger" name="delete" formmethod="post" onclick="return confirm('Are you sure you want to deactivate your account?');">Deactivate</button> </div>
                </div>
          </form>
          </div>
      </div>

  <?php include "sections/footer.php" ?>

  <script src="assets/js/patient-profile.js"></script>  
  <script src="assets/js/patient.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>