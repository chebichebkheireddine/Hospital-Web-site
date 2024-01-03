<?php 

$a = "b";

include("include/slide.php");
$user = new Doctor();
$sql = "SELECT * FROM doctor WHERE id = '".$_SESSION['doctor']."'";
$row = $user->details($sql);
if(isset($_POST['create'])){
	$user->insert($_POST['day'],$_POST['date'],$_POST['start'],$_POST['end'],$row['name'], $row['Field']);
}

?>
<section id="appointment" class="d-flex">
	<div class="container">
		<div class="section-appointment">
			<h3>Sa<span>HLa</span></h3>
			<p>Fill out the form below to create a scheduled appointment.</p>
		</div>
	</div>
</section>

<div class="wrapper mt-sm-5">  
	<div class="date">
		<form method="post">

			<div class="form-group">
				<label for="day"><i class="fas fa-sun"></i> Select Day:</label>
				<select class="form-control" name="day" required>
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

			<div class="form-group">
				<label for="date"><i class="fas fa-calendar"></i> Date:</label>
				<input class="form-control" type="date" name="date" placeholder="Date" required>
			</div>

			<div class="form-group">
				<label for="start"><i class="fas fa-clock"></i> Start Time:</label>
				<input class="form-control" type="time" name="start" placeholder="Start Time" required>
			</div>   

			<div class="form-group">
				<label for="end"><i class="fas fa-clock"></i> End Time:</label>
				<input class="form-control" type="time" name="end" placeholder="End Time" required>
			</div>  

			<div class="message" id="message"></div>

			<script src="assets/js/signup.js?v=<?php echo time(); ?>"></script>

			<input class="btn btn-primary" type="submit" name="create" value="Create" formmethod="post" onclick="return confirm('Are you sure you want to create an appointment?')"> 

		</form>     
	</div> 
</div>
