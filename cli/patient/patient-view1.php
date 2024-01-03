<?php
	include 'oop/appointment.php';
	session_start();

	if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
		header('location: ../login.php');
	}

	$user = new Patient();
	$sql = "SELECT * FROM patient WHERE id = '".$_SESSION['user']."'";
	$row = $user->details($sql);

	date_default_timezone_set('Australia/Melbourne');
	$date = date('Y-m-d');

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>appointMed</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css" >
  <link rel="stylesheet" type="text/css" href="assets/vendor/boxicons/css/boxicons.min.css">		
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

  <link href="assets/css/patient.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="assets/css/patient-view.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body>

	<?php include "sections/header.php" ?>  

		<section id="appointment" class="d-flex">
		<div class="container">

		<div class="section-appointment">
			<h3>View <span>Appointment</span></h3>
			<p>Here is the list of your upcoming scheduled appointments.</p>
			</div>
	
		</div>
		
		</section>

		
		

		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table">

							<div class="trow header">
								<div class="cell">
									Doctor
								</div>
								<div class="cell">
									Start Time
								</div>
								<div class="cell">
									End Time
								</div>
								<div class="cell">
									Date
								</div>
								<div class="cell">
									Day
								</div>
								<div class="cell">
									Service
								</div>
							</div>

						<?php 
							$user = new Patient();
							$result = $user->displaySchedule();

							while($data = mysqli_fetch_assoc($result)){ 
								if ($row['id'] == $data['patientID'] && $date <= $data['scheduledDate']) { ?>

								<div class="trow">
									<div class="cell">
										<?php echo $data['doctor']; ?>
									</div>
									<div class="cell" >
										<?php echo $data['startTime']; ?>
									</div>
									<div class="cell">
										<?php echo $data['endTime']; ?>						
									</div>
									<div class="cell"a>
										<?php echo $data['scheduledDate']; ?>							
									</div>
									<div class="cell" >
										<?php echo $data['day']; ?>
									</div>
									<div class="cell"a>
										<?php echo $data['field']; ?>							
									</div>
								</div>

							<?php };  ?>
						<?php } ?>
							
					</div>
				</div>
			</div>
		</div>

	<?php include'sections/footer.php';?>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="assets/js/patient.js"></script>

</body>

</html>