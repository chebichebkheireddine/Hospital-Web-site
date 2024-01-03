<?php

  include_once('db_connect.php');

  class Doctor extends DbConnection {

      public function details($sql){
 
        $query = $this->connection->query($sql);

        $row = $query->fetch_array();

        return $row;       
      }
  
      public function displaySchedule() {
        $sql = "SELECT * FROM schedule ORDER BY scheduledDate";
        $result = mysqli_query($this->connection, $sql);

        return $result;
    
      }

      public function insert($day,$date,$start,$end,$name,$field){
         
          $sql = "INSERT INTO schedule (startTime, endTime, scheduledDate, bookAvail, doctor, field, day)
                  VALUES ('$start', '$end', '$date', 'Yes', '$name', '$field', '$day')";

          $dbconn = $this->connection;

          if (mysqli_query($dbconn, $sql)) {
            echo '<script>alert("Your scheduled appointment is succesfully created.")</script>';
          }
          else {
            echo '<script>alert("Failed to create a scheduled appointment")</script>';
          }
          
      }
      
  }

?>


