<?php

include_once('db_connect.php');

class Patient extends DbConnection {
 
    public function insert($fname, $lname, $email, $bday, $pass, $confirm_pass) {
        if ($pass == $confirm_pass) {
            $sql = "INSERT INTO patient (FName, LName, Email, Bday, Pass)
                    VALUES ('$fname', '$lname', '$email', '$bday', '$pass')";
            
            $dbconn = $this->connection;
            // mysqli_query($dbconn, $sql) or die(mysqli_error($dbconn));

            if (mysqli_query($dbconn, $sql)) {
                $_SESSION['message_successful'] = 'Account successfully created.';
            }
            else {
                $_SESSION['message_failed'] = 'An account already exists.';
            }
        }  
        else {
            $_SESSION['message_failed'] = 'Passwords do not match.';
        }          
    }   
}

?>


