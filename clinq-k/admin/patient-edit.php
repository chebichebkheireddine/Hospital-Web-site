<?php $a = "b";
include("include/slide.php");
include_once('oop/patient_function.php');
$id = $_GET['idp'];
  $user = new Patient();
  $sql = "SELECT * FROM patient WHERE id = '$id'";
  $row = $user->details($sql);
  if (isset($_POST['update'])){
      
    $user->updatePatient($id, $_POST['fname'], $_POST['lname'], $_POST['bday'], $_POST['email'], $_POST['pass']);
  
  }?>
  <section id="profile" class="d-flex">
		<div class="container">

		<div class="section-appointment1">
			<h3>Update <span>Profile</span></h3>
			<p>Down below is the patient personal information.</p>
			</div>
	
		</div>
		</section>

      <div class="wrapper  mt-sm-5">
          <h4 class="pb-4 border-bottom">Patient Information</h4>
          <form method="post">
            <div class="py-2">

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="fname">First Name</label> <input type="text"  id="textsend1" name="fname" class="bg-light form-control" placeholder=<?php echo $row['FName'] ?> onkeyup="success1()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lname">Last Name</label> <input type="text"  id="textsend2" name = "lname" class="bg-light form-control" placeholder=<?php echo $row['LName'] ?> onkeyup="success2()"> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="bday">Birthday</label> <input type="text" id="textsend3" name= "bday" class="bg-light form-control" onfocus="(this.type='date')"  min="1900-01-01" max="2003-12-31" placeholder=<?php echo $row['Bday'] ?> onkeyup="success3()"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input type="password"  id="textsend4" name="email" class="bg-light form-control" placeholder=<?php echo $row['Email'] ?> onkeyup="success4()"> </div>
                </div>

                <div class="row py-2"">
                    <div class="col-md-6"> <label for="pass">Password</label> <input type="password"  id="textsend5" name= "pass" class="bg-light form-control" placeholder=<?php echo $row['Pass'] ?> onkeyup="success5()""> </div>
                </div>

                </div>
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="update" name="update" onclick="return confirm('Are you sure you want to C changes?')" formmethod="post" disabled>Save Changes</button> </div>

          </form>
          </div>
      </div>
