<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<i class="bx bxs-user"></i>
		<span class="text">DoctorHub</span>
	</a>
	<ul class="side-menu top">
		<li <?php if ($a == "a")
			echo 'class="active"'; ?>>
			<a href="doctor-home.php?dashboard">
				<i class="bx bxs-dashboard"></i>
				<span class="text">Home</span>
			</a>
		</li>
		<li <?php if ($a == "b")
			echo 'class="active"'; ?>>
			<a href="doctor-home.php?Make-Appointment">
				<i class="bx bxs-calendar-plus"></i>
				<span class="text">Make Appointment</span>
			</a>
		</li>
		<li <?php if ($a == "c")
			echo 'class="active"'; ?>>
			<a href="doctor-home.php?doctor-view">
				<i class="bx bxs-calendar"></i>
				<span class="text">View Appointment</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu">
		<li>
			<a href="oop/doctor-logout.php" class="logout">
				<i class="bx bxs-log-out-circle"></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section><!-- SIDEBAR -->