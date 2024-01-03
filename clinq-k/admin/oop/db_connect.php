<?php

class DbConnection{
 
    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database = 'appointmed_db';
 
    protected $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }  
        }    
 
        return $this-> connection;
    }
}
?>