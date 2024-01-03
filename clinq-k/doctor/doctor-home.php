<?php
include 'oop/doctor-function.php';
session_start();

if (!isset($_SESSION['doctor']) || (trim($_SESSION['doctor']) == '')) {
	header('location: ../login.php');
}

$user = new Doctor();
$sql = "SELECT * FROM doctor WHERE ID = '" . $_SESSION['doctor'] . "'";
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
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

	<script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>

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
			if (isset($_GET['Make-Appointment'])) {
				# code...of call page 
				include("doctor-make.php");

			}
			if (isset($_GET['doctor-view'])) {
				# code...of call page 
				include("doctor-view.php");

			}
			if (isset($_GET['medcien'])) {
				# code...of call page 
				include("medcien.php");

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

	<script src="assets/js/index.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/doctor.js"></script>

	<script src="script.js"></script>
</body>

</html>