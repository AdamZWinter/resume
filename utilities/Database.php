<?php
//utilities/Database.php

class Database {

    private mysqli $db;

    public function __construct(){
        $dbconfig = new databaseConfig();
        $this->db = new mysqli($dbconfig->getServer(), $dbconfig->getUser(), $dbconfig->getPassword(), $dbconfig->getDatabase());
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database.';
            exit;
            }else{
            //echo 'Successfully connected to database.';
            }
    }

    public function getdb(){return $this->db;}
}

?>