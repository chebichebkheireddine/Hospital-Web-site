<?php $a = "h";
include("include/slide.php");
include_once('oop/doctor_function.php');
$id = $_GET['id'];
  $user = new Doctor();
  $sql = "SELECT * FROM doctor WHERE id = '$id'";
  $row = $user->details($sql);
  if (isset($_POST['update'])){
      
    $user->updateDoctor($id, $_POST['name'], $_POST['field'], $_POST['email'], $_POST['password']);
  
  }
?>

<section id="profile" class="d-flex">
    <div class="container">

      <div class="section-appointment1">
        <h3>Update <span>Profile</span></h3>
        <p>Down below is the doctor personal information.</p>
      </div>

    </div>
  </section>

  <div class="wrapper  mt-sm-5">
    <h4 class="pb-4 border-bottom">Doctor Information</h4>
    <form method="post">
      <div class="py-2">

        <div class="row py-2"">
                    <div class=" col-md-6"> <label for="name">Name</label> <input type="text" id="textsend1"
            name="name" class="bg-light form-control" placeholder=<?php echo $row['name'] ?> onkeyup="success1()">
        </div>
        <div class="col-md-6 pt-md-0 pt-3"> <label for="Field">Field</label> <input type="text" id="textsend2"
            name="field" class="bg-light form-control" placeholder=<?php echo $row['Field'] ?> onkeyup="success2()">
        </div>
      </div>

      <div class="row py-2"">
                    <div class=" col-md-6"> <label for="Email">Email</label> <input type="email" id="textsend3"
          name="email" class="bg-light form-control" placeholder=<?php echo $row['Email'] ?> onkeyup="success3()">
      </div>
      <div class="col-md-6 pt-md-0 pt-3"> <label for="Pass">Password</label> <input type="password" id="textsend4"
          name="password" class="bg-light form-control" placeholder=<?php echo $row['Pass'] ?> onkeyup="success4()">
      </div>
  </div>

  </div>
  <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" id="update" name="update"
      onclick="return confirm('Are you sure you want to save changes?')" formmethod="post" disabled>Save
      Changes</button> </div>

  </form>
  </div>
  </div>