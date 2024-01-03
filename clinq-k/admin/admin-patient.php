<?php $a = "k";
include("include/slide.php");
$user = new Patient();
?>
  
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
                            <a href="admin-index.php?idp=<?php echo $data["id"]; ?>">Edit</a>
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
          <a href="admin-index.php?patient-add" class="btn-appoint">Add Patient</a>
        </div>

    </div> 