<?php $a = 'a';
$user = new Doctor();
$sql = "SELECT * FROM doctor WHERE ID = '" . $_SESSION['doctor'] . "'";
$row = $user->details($sql);
?>

<div class="head-title">
	<div class="left">
		<h1>Dashboard</h1>
		<ul class="breadcrumb">
			<li>
				<a href="#">Dashboard</a>
			</li>
			<li><i class='bx bx-chevron-right'></i></li>
			<li>
				<a class="active" href="#">Home</a>
			</li>
		</ul>
	</div>
	
</div>
<div class="container">
	<h1>Welcome back,<br><span>
			<?php echo $row['name'] ?>
		</span></h1>
	<h2>If you wish to view your upcoming schedule, <br>click the button below.</h2>
	
</div>