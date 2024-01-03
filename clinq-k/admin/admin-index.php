<?php
session_start();

if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
  header('location: ../login.php');
}

include('oop/doctor_function.php');
include 'oop/patient_function.php'; 



$user = new Doctor();
$sql = "SELECT * FROM doctor WHERE id = '".$_SESSION['admin']."'";
$row = $user->details($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  	
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
</head>

<body>

	<!-- CONTENT -->
	<?php
	$a = "a"; /*Call slider bare to this code */
	include("include/slide.php");
	?>
	<section id="content">
		<!-- NAV -->
		<?php include("include/nav.php"); /*Call slider bare to this code */?>
		<!-- NAV -->
		<!-- MAIN -->
		<main>
			<?php
			/*Make post and get for change elmnt of dashboard yes ix the corect why to fo it*/
			if (isset($_GET['dashboard'])) {
				# code...of call page 
			
				include("dashboard.php");


			}
			if (isset($_GET['admin-docter'])) {
				# code...of call page 
				include("admin-docter.php");

			}
			if(isset($_POST['delete'])){
				$user->deleteDoctor($_POST['id']);
				echo "<script>window.open('admin-index.php?dashboard','_self')</script>";
			  }
			  if(isset($_POST['deletea'])){
				$user->deleteSchedule($_POST['id']);
				echo "<script>window.open('admin-index.php?dashboard','_self')</script>";
			  }
			if (isset($_GET['doctor-add'])) {
				# code...of call page 
				
				include("doctor-add.php");

			}
			if (isset($_GET['id'])) {
				# code...of call page 
				
				include("doctor-edit.php");

			}
			if (isset($_GET['idp'])) {
				# code...of call page 
				
				include("patient-edit.php");

			}
			if (isset($_GET['patient-add'])) {
				# code...of call page 
				include("patient-add.php");

			}
			if(isset($_POST['delete'])){
				$user1->deletePatient($_POST['id']);
				echo "<script>window.open('index.php?dashboard','_self')</script>";
			  }
			if (isset($_GET['admin-patient'])) {
				# code...of call page 
				include("admin-patient.php");

			}
			if (isset($_GET[''])) {
				# code...of call page 
				include("");

			}

			?>
		</main>

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	




	<script src="assets/js/admin.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="script.js"></script>
</body>

</html>