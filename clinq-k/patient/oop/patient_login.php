<?php

include_once('db_connect.php');
 
class Patient extends DbConnection{
 
    public function __construct(){
 
        parent::__construct();
    }
 
    public function check_login($email, $password){

        
        $sql = "SELECT * FROM patient WHERE Email = '$email' AND Pass = '$password'";
        $query = $this->connection->query($sql);
        $row = $query->fetch_array();

        if ($query->num_rows > 0) {
            return $row['id'];
           
        } 

        else{
            $sql1 = "SELECT * FROM doctor WHERE Email = '$email' AND Pass = '$password'";
            $query1 = $this->connection->query($sql1);
            $row1 = $query1->fetch_array();
            if ($query1->num_rows > 0) {
                return $row1['id'];
                
            }
            else {
                return false;
            }
        }

           
    }

 
    public function details($sql){
 
        $query = $this->connection->query($sql);
 
        $row = $query->fetch_array();
 
        return $row;       
    }
    public function displaysDoctorslimt () {
        $sql = "SELECT * FROM doctor ORDER BY RAND()
        LIMIT 5 ";
        $doctors = mysqli_query($this->connection, $sql);

        return $doctors;
      }
 
    public function escape_string($value){
 
        return $this->connection->real_escape_string($value);
    }
}