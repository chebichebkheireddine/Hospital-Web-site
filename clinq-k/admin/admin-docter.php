<?php
 $a = "b";

if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')){
  header('location: ../login.php');
}


$user = new Doctor();

include("include/slide.php");
?>


<section id="appointment" class="d-flex">
		<div class="container">

		<div class="section-appointment">
			<h3>Manage <span>Doctors</span></h3>
			<p>Down below are the doctors' personal information.</p>
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
                        <th>Name </th>
                        <th>Field</th>
                        <th>Email </th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $result = $user->displayDoctor();
                    

                    while($data = mysqli_fetch_assoc($result)){
                         if($data['id'] > 1){

                         ?>
                        <tr>
                        <form method="post">
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['Field'] ?></td>
                        <td><?php echo $data['Email'] ?></td>
                        <td><?php echo $data['Pass'] ?></td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <td>
                            <a href="admin-index.php?id=<?php echo $data["id"]; ?>">Edit</a>
                            <input type="submit" formmethod="post" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete doctor?')">
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
          <a href="admin-index.php?doctor-add" class="btn-appoint">Add Doctor</a>
        </div>

    </div> 



