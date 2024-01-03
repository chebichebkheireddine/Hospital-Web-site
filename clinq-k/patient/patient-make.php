<?php
include 'oop/appointment.php';
$null = 1;
session_start();

if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
  header('location: ../login.php');
}

$user = new Patient();
$sql = "SELECT * FROM patient WHERE id = '" . $_SESSION['user'] . "'";
$row = $user->details($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>appointMed</title>

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/css/patient.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="assets/css/patient-make.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body>

  <?php

  $result = $user->displaySchedule();
  $doctors = $user->displaysDoctors();

  if (isset($_POST['book'])) {
    $user->bookSchedule($_POST['id'], $row['FName'], $row['LName'], $row['id']);
  }

  ?>

  <?php include "sections/header.php" ?>

  <div class="split-screen">

    <!-- Request Appointment -->
    <div class="right">
      <form>
        <div class="section-appointment">
          <h3 >Sh<span>hla</span></h3>
          <p data-translate="Fill out the form below to view available schedules.">Fill out the form below to view
            available schedules.</p>
        </div>
        <div class="booking-form">
          <form method="POST" action="patient-make.php">
            <div class="input-field"> <i class="bx bx-user"></i> <select id="doctor" name="doctor" required>
                <option value="" disabled selected data-translate="SelectDoctor">Select Doctor</option>
                <?php while ($doc = mysqli_fetch_assoc($doctors)) {
                  if ($doc['id'] > 100) { ?>
                    <optgroup label="<?php echo $doc['Field'] ?>">
                      <option value="<?php echo $doc['name'] ?>" ?>"><?php echo $doc['name'] ?></option>
                    <?php }
                  ; ?>
                  <?php }
                ; ?>
              </select> </div>
            <div class="input-field"> <i class="bx bx-calendar-check"></i> <input type="text" name="date"
                placeholder="Select Date" onfocus="(this.type='date')" required data-translate="SelectDate"> </div>
            <input class="btn-book" type="submit" name="view" value="view" formmethod="POST" data-translate="View" />
          </form>
          <form method="POST" action="patient-make.php"> <input class="btn-book" type="submit" name="view2"
              value="view available" formmethod="POST" data-translate="ViewAvailable" /> </form>
        </div>
    </div>

    <!-- View Available Appointments -->
    <div class="left">
      <section class="text">
        <h1 data-translate="AvailableSchedules">Available Schedules</h1>
        <table class="table">
          <thead class="thead">
            <th scope="col" data-translate="AppointmentID">App ID</th>
            <th scope="col" data-translate="AppointmentDate">Date</th>
            <th scope="col" data-translate="AppointmentDay">Day</th>
            <th scope="col" data-translate="AppointmentStartTime">Start Time</th>
            <th scope="col" data-translate="AppointmentEndTime">End Time</th>
            <th scope="col" data-translate="AppointmentBooking">Booking</th>
          </thead>

          <?php if (isset($_POST['view']))
            while ($data = mysqli_fetch_assoc($result)) {
              if ($data['scheduledDate'] == $_POST['date'] && $data['doctor'] == $_POST['doctor'] && $data['bookAvail'] == "Yes") {
                $null = 0;
                ?>
                <tbody>
                  <tr>
                    <form method="POST">
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['id']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['scheduledDate']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['day']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['startTime']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['endTime']; ?>
                      </td>
                      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                      <td style="font-weight: 300; color: white;"><input class="btn-appoint" type="submit" name="book"
                          formmethod="POST" value="Book"
                          onclick="return confirm('Are you sure you want to book this slot?')" /></td>
                    </form>
                  </tr>
                </tbody>
              <?php }
              ; ?>
            <?php } ?>
          <?php if (isset($_POST['view2']))
            while ($data = mysqli_fetch_assoc($result)) {
              if ($data['bookAvail'] == "Yes") {
                $null = 0;
                ?>
                <tbody>
                  <tr>
                    <form method="POST">
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['id']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['scheduledDate']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['day']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['startTime']; ?>
                      </td>
                      <td style="font-weight: 300; color: white;">
                        <?php echo $data['endTime']; ?>
                      </td>
                      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                      <td style="font-weight: 300; color: white;"><input class="btn-appoint" type="submit" name="book"
                          formmethod="POST" value="Book"
                          onclick="return confirm('Are you sure you want to book this slot?')" /></td>
                    </form>
                  </tr>
                </tbody>
              <?php }
              ; ?>
            <?php } ?>


        </table>

        <?php
        if ($null == 1) {
          echo "No Available Schedule Found Yet.";
        }


        ?>

      </section>
    </div>

  </div>

  <?php include "sections/footer.php" ?>


  <script src="assets/js/patient.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>