<?php
$a = "h";
include("include/slide.php");
$user = new Doctor();
if (isset($_POST['insert'])){
  // Handle uploaded file
  $file = $_FILES['file'];
  $filename = $file['name'];
  $tempname = $file['tmp_name'];
  $folder = '..\images\\'.$filename;
  move_uploaded_file($tempname, $folder);
  
  // Insert doctor into database
  $user->insertDoctor($_POST['name'], $_POST['field'], $_POST['email'], $_POST['password'], $filename);
}
?>

<section id="profile" class="d-flex">
  <div class="container">
    <div class="section-appointment1">
      <h3>Add <span>Doctor</span></h3>
      <p>Fill out the form below to add doctor.</p>
    </div>
  </div>
</section>

<div class="wrapper mt-sm-5">
  <h4 class="pb-4 border-bottom">Doctor Information</h4>
  <form method="post" enctype="multipart/form-data">
    <div class="py-2">
      <div class="row py-2">
        <div class="col-md-6">
          <label for="name"></label>
          <input type="text" id="textsend1" name="name" class="bg-light form-control" placeholder="Name" required>
        </div>
        <div class="col-md-6 pt-md-0 pt-3">
          <label for="Field"></label>
          <input type="text" id="textsend2" name="field" class="bg-light form-control" placeholder="Field" required>
        </div>
      </div>

      <div class="row py-2">
        <div class="col-md-6">
          <label for="Email"></label>
          <input type="email" id="textsend3" name="email" class="bg-light form-control" placeholder="Email" required>
        </div>
        <div class="col-md-6 pt-md-0 pt-3">
          <label for="Pass"></label>
          <input type="password" id="textsend4" name="password" class="bg-light form-control" placeholder="Password" required>
        </div>
      </div>
      
      <div class="row py-2">
        <div class="col-md-6">
          <label for="file"></label>
          <input type="file" id="textsend3" name="file" class="bg-light form-control" placeholder="file" required>
        </div>
      </div>
    </div>

    <div class="py-3 pb-4 border-bottom">
      <button class="btn btn-primary mr-3" id="insert" name="insert" formmethod="post">Add Doctor</button>
    </div>
  </form>
</div>
