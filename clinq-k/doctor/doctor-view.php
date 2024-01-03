<?php 
$a = "c";
include("include/slide.php");
$user = new Doctor();
$sql = "SELECT * FROM doctor WHERE id = '".$_SESSION['doctor']."'";
$row = $user->details($sql);

date_default_timezone_set('Australia/Melbourne');
$date = date('Y-m-d');
?>
<section id="appointment" class="d-flex">
	<div class="container">
		<div class="section-appointment">
			<h3 style="color: #0077B6">View <span>Appointment</span></h3>
			<p style="color: #023047">Here is the list of your upcoming scheduled appointments.</p>
		</div>
	</div>
</section>

<div class="container mt-5">
	<table class="table">
		<thead>
			<tr>
				<th scope="col" style="color: #0077B6">Patient Name</th>
				<th scope="col" style="color: #0077B6">Start Time</th>
				<th scope="col" style="color: #0077B6">End Time</th>
				<th scope="col" style="color: #0077B6">Scheduled Date</th>
				<th scope="col" style="color: #0077B6">Day</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$user = new Doctor();
			$result = $user->displaySchedule();

			while($data = mysqli_fetch_assoc($result)){ 
				if ($row['name'] == $data['doctor'] && $date <= $data['doctor']) { ?>
				<tr>
					<td style="color: #023047"><?php echo $data['patientFN']. " ". $data['patientLN']; ?></td>
					<td style="color: #023047"><?php echo $data['startTime']; ?></td>
					<td style="color: #023047"><?php echo $data['endTime']; ?></td>
					<td style="color: #023047"><?php echo $data['scheduledDate']; ?></td>
					<td style="color: #023047"><?php echo $data['day']; ?></td>
				</tr>
			<?php } ?>
			<?php } ?>
		</tbody>
	</table>
</div>
