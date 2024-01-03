<?php $a = 'a';

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
<section id="appointment" class="d-flex">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Doctor</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Service</th>
                        <th>patient</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    <?php
    $date = null;
    $user = new Patient();
    $result = $user->displaySchedule();

    while ($data = mysqli_fetch_assoc($result)) {
        if ($date <= $data['id']) { ?>
            <tr>
                <form method="post">
                    <td>
                        <?php echo $data['doctor']; ?>
                    </td>
                    <td>
                        <?php echo $data['startTime']; ?>
                    </td>
                    <td>
                        <?php echo $data['endTime']; ?>
                    </td>
                    <td>
                        <?php echo $data['scheduledDate']; ?>
                    </td>
                    <td>
                        <?php echo $data['day']; ?>
                    </td>
                    <td>
                        <?php echo $data['field']; ?>
                    </td>
                    <td>
                        <?php echo $data['patientFN']." ".$data['patientLN']; ?>
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="submit" formmethod="post" name="deletea" value="Delete" onclick="return confirm('Are you sure you want to delete doctor?')">
                    </td>
                </form>
            </tr>
    <?php }
    ; ?>
    <?php } ?>
</tbody>

            </table>
        </div>
    </div>
</section>