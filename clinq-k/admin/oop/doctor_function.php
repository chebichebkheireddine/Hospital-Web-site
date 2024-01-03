<?php 
    include_once('db_connect.php');
    class Doctor extends DbConnection{

        public function details($sql){
            $query = $this->connection->query($sql);
            $row = $query->fetch_array();

            return $row;
        }
    
    public function displayDoctor(){
        $sql = "SELECT * FROM doctor ORDER BY id";
        $result = mysqli_query($this->connection, $sql);

        return $result;
    }
    public function deleteSchedule($id) {
        $sql = "DELETE FROM schedule WHERE id = '$id'";
        if (mysqli_query($this->connection, $sql)) {
          echo "<script>alert('Schedule record has been deleted.');</script>";
        }
      }

    public function deleteDoctor($id){
        $sql = "DELETE FROM doctor WHERE id = '$id'";
        if(mysqli_query($this->connection, $sql)){
            echo "<script>alert('Doctor has been successfully deleted.');</script>";
            header("Location: ./admin-doctor.php");
        }else{
            echo "<script>alert('Failed to delete doctor.');</script>";
            header("Location: ./admin-doctor.php");
        }
    }

    public function updateDoctor($id, $name, $field, $email, $pass){
        if ($name != NULL) {
            $sql = "UPDATE doctor SET name = '$name' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($field != NULL) {
            $sql = "UPDATE doctor SET Field = '$field' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($email != NULL) {
            $sql = "UPDATE doctor SET Email = '$email' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        if ($pass != NULL) {
            $sql = "UPDATE doctor SET Pass = '$pass' WHERE id = '$id'";
            mysqli_query($this->connection, $sql);
        }
        
        if (mysqli_query($this->connection, $sql))
            header("location: ./admin-doctor.php");
    }

    public function insertDoctor($name, $field , $email, $pass, $photo){
        $sql = "INSERT INTO doctor (name, Field, Email, Pass,photo)
        VALUES ('$name', '$field', '$email', '$pass','$photo')";

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