<?php 
    include_once('db_connect.php');
    class Patient extends DbConnection{

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
          public function deleteSchedule($id) {
            $sql = "DELETE FROM schedule WHERE id = '$id'";
            if (mysqli_query($this->connection, $sql)) {
              echo "<script>alert('Schedule record has been deleted.');</script>";
            }
          }
    
    public function displayPatient(){
        $sql = "SELECT * FROM patient ORDER BY id";
        $result = mysqli_query($this->connection, $sql);

        return $result;
    }

    public function deletePatient($id){
        $sql = "DELETE FROM patient WHERE id = '$id'";
        if(mysqli_query($this->connection, $sql)){
            echo "<script>alert('Patient has been successfully deleted.');</script>";
            header("Location: ./admin-patient.php");
        }else{
            echo "<script>alert('Failed to delete the patient.');</script>";
            header("Location: ./admin-patient.php");
        }
    }

    public function updatePatient($id, $fname, $lname, $email, $bday, $pass){
        if ($fname != NULL) {
            $sql = "UPDATE patient SET FName = '$fname' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($lname != NULL) {
            $sql = "UPDATE patient SET LName = '$lname' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($bday != NULL) {
            $sql = "UPDATE patient SET Bday = '$bday' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($email != NULL) {
            $sql = "UPDATE patient SET Email = '$email' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($pass != NULL) {
            $sql = "UPDATE patient SET Pass = '$pass' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        
        if (mysqli_query($this->connection, $sql))
            header("location: ./admin-patient.php");
    }

    public function insertPatient($fname, $lname, $email , $bday, $pass){
        $sql = "INSERT INTO patient (FName, LName, Email,Bday, Pass)
        VALUES ('$fname', '$lname', '$email', '$bday', '$pass')";

        $dbconn = $this->connection;

        if (mysqli_query($dbconn, $sql)) {
           echo "<script>alert('Account Successfully Created.');</script>";
        }
        else {
            echo "<script>alert('An Account Already Exists.');</script>";
        }
    }
}

?>