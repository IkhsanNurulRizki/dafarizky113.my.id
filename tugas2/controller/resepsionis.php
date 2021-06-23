<?php
    include_once('./config/serverConfig.php');

    class Resepsionis {
        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli(dbHost, dbUsername, dbPassword, dbName);

            if ($this->conn->connect_error){
                echo "Connection failed : ". $this->conn->connect_error;
            }else {
                return $this->conn;
            }
        }

        public function viewResepsionis(){
            $sql = "SELECT * FROM resepsionis";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>