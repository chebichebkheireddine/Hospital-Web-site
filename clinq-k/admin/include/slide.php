<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-user'></i>
		<span class="text">DoctorHub</span>
	</a>
	<ul class="side-menu top">
		<li <?php if ($a == "a") echo 'class="active"'; ?>>
			<a href="admin-index.php?dashboard">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li <?php if ($a == "b") echo 'class="active"'; ?>>
			<a href="admin-index.php?admin-docter">
				<i class='bx bxs-user'></i>
				<span class="text">Doctor</span>
			</a>
		</li>
		<li <?php if ($a == "h") echo 'class="active"'; ?>>
			<a href="admin-index.php?doctor-add">
				<i class='bx bxs-user-plus'></i>
				<span class="text">Doctor add</span>
			</a>
		</li>
		<li <?php if ($a == "k") echo 'class="active"'; ?>> 
			<a href="admin-index.php?admin-patient">
				<i class='bx bxs-user'></i>
				<span class="text">Patient</span>
			</a>
		</li>
		<li <?php if ($a == "c") echo 'class="active"'; ?>> 
			<a href="admin-index.php?patient-add">
				<i class='bx bxs-user-plus'></i>
				<span class="text">Patient add</span>
			</a>
		</li>
		

	</ul>
	<ul class="side-menu">
		
		<li>
			<a href="oop/admin_logout.php" class="logout">
				<i class='bx bxs-log-out-circle'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>
