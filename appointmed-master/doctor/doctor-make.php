<?php
  include 'oop/doctor-function.php';
  session_start();

  if (!isset($_SESSION['doctor']) ||(trim ($_SESSION['doctor']) == '')){
    header('location: ../login.php');
  } 

  $user = new Doctor();
  $sql = "SELECT * FROM doctor WHERE id = '".$_SESSION['doctor']."'";
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

<?php
  if(isset($_POST['create'])){
      $user->insert($_POST['day'],$_POST['date'],$_POST['start'],$_POST['end'],$row['name'], $row['Field']);
  }

?>

<?php include 'section/header.php' ?>

<section id="appointment" class="d-flex">
		<div class="container">

		<div class="section-appointment">
			<h3>Make <span>Appointment</span></h3>
			<p>Fill out the form below to create an scheduled appointment.</p>
			</div>
	
		</div>
		</section>
    
      <div class="wrapper bg-white mt-sm-5">  
          <div class="date">
            <form method="post">

                <div class="input-field">
                      <i class="fas fa-sun"></i>
                      <select name="day" required>
                          <option value="" disabled selected>Select Day</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>
                          <option value="Friday">Friday</option>
                          <option value="Saturday">Saturday</option>
                          <option value="Sunday">Sunday</option>
                        </select>
                  </div>


	             <div class="input-field">
                    <i class="fas fa-calendar"></i>
                    <input  type="date" name="date" placeholder="Date" required >
                </div>

                <div class="input-field">
                    <i class="fas fa-clock"></i>
                    <input type="time" name="start" placeholder="Start Time"  required >
                </div>   
                
                <div class="input-field">
                    <i class="fas fa-clock"></i>
                    <input type="time" name="end" placeholder="End Time"  required >
                </div>  
                <div class="message" id="message"></div>

                <script src="assets/js/signup.js?v=<?php echo time(); ?>"></script>

                <input class="btn" type="submit" name="create" value="Create" formmethod="post" onclick="return confirm('Are you sure you want to create an appointment?')"> 

            </form>     
          </div> 
      </div>
                        
    <script src="assets/js/doctor.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>