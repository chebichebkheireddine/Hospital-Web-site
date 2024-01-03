<?php
  session_start();

  if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
    header('location: ../login.php');
  }

  include 'oop/patient_function.php';

  $user = new Patient();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">

  	<title>appointMed</title>

  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  	<link href="assets/css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

<?php 
  if(isset($_POST['delete'])){
    $user->deletePatient($_POST['id']);
  }
?>
<?php include "section/header.php" ?>

   
<section id="appointment" class="d-flex">
		<div class="container">

		<div class="section-appointment">
			<h3>Manage <span>Patients</span></h3>
			<p>Down below are the patients' personal information.</p>
			</div>
	
		</div>
		</section>

    <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $result = $user->displayPatient();
                    

                    while($data = mysqli_fetch_assoc($result)){
                         if($data['id'] > 1){

                         ?>
                        <tr>
                        <form method="post">
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['FName'] ?></td>
                        <td><?php echo $data['LName'] ?></td>
                        <td><?php echo $data['Bday'] ?></td>
                        <td><?php echo $data['Email'] ?></td>
                        <td><?php echo $data['Pass'] ?></td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <td>
                            <a href="patient-edit.php?id=<?php echo $data["id"]; ?>">Edit</a>
                            <input  type="submit" formmethod="post" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete doctor?')">
                        </td>
                        </form>
                        </tr>
                        <?php }; ?>
                        <?php }; ?>  
                    </tbody>
                </table>
            </div>
        </div>  
        <div class="d-flex justify-content-end">
          <a href="patient-add.php" class="btn-appoint">Add Patient</a>
        </div>

    </div> 




    </main>

    <script src="assets/js/admin.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>