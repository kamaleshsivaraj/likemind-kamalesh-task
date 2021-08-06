<?php
session_start();

class DB {
    protected $DB_SERVER = 'localhost';
    protected $DB_USER= 'root';
    protected $DB_PASS= '';
    protected $DB_NAME= 'likemindkamalesh';
    public $con;

    function dbconnection() {
        $this->con = new mysqli($this->DB_SERVER,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
    
        if ($this->con->connect_error) {
            echo ("failed to connect to mysql DB:" .$this->con->connect_error);
        }
        return $this->con;
    }
}


?>