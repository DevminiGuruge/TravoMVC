<?php

class Database {

    private $con;

    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASSWOR) {
        
         $this->con = mysqli_connect("$DB_HOST", "$DB_USER", "$DB_PASSWOR", "$DB_NAME");
        // Check connection
        if ( $this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    

    public function selectQuery($sql){
      return $result = mysqli_query($this->con, $sql);
    }
    // public function insertQuery($sql){
    //     return $result = mysqli_query($this->con, $sql);
    // }
}
