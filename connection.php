<?php
    Class db0bj{
        var $servername = "localhost";
        var $username = "root";
        var $password = "";
        var $dbname = "db_test"; var $conn;
        function getConnstring(){
            $con = mysqli_connect($this->servername,$this->username,
            $this->password,$this->dbname)or 
            die("conection failed :" .mysqli_connect_error());
            if(mysqli_connect_errno()){
                printf("Connect failed: %s\n",mysqli_connect_error());
                exit();
                
            }else{
                $this->conn = $con;
            }
            return $this->conn;
        }
    }

?>