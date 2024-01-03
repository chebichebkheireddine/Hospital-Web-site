<?php

include_once('db_connect.php');

class Update extends DbConnection {
 
    public function updatePatient($fname, $lname, $bday, $pass, $id) {
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
        if ($pass != NULL) {
            $sql = "UPDATE patient SET Pass = '$pass' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        
        if (mysqli_query($this->connection, $sql))
            header("location: ./patient-profile.php");

    }   

    public function delete($id) {
        $sql = "DELETE FROM patient WHERE id = '$id'";

        if (mysqli_query($this->connection, $sql)){
            session_start();
            session_destroy();
            header("location: /appointMed/login.php");
        }
    }   
}

?>


