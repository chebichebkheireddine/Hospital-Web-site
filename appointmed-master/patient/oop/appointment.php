<?php

  include_once('db_connect.php');

  class Patient extends DbConnection {

      public function details($sql){
 
        $query = $this->connection->query($sql);

        $row = $query->fetch_array();

        return $row;       
      }
  
      public function displaySchedule() {
        $sql = "SELECT * FROM schedule ";
        $result = mysqli_query($this->connection, $sql);

        return $result;
    
      }
        
      public function bookSchedule($id, $FName, $LName, $patientId) {
        $sql = "UPDATE schedule SET bookAvail = 'No', patientId = '$patientId', patientFN = '$FName', patientLN = '$LName' WHERE id = '$id'";

        if (mysqli_query($this->connection, $sql))
          echo "<script>alert('Your appointment has been scheduled.');</script>";
      }

      public function displaysDoctors () {
        $sql = "SELECT * FROM doctor ORDER BY id";
        $doctors = mysqli_query($this->connection, $sql);

        return $doctors;
      }
}

?>


