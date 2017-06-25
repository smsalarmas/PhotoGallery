<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DBClass {

    private $SqlConnect, $query;


   function __construct() {
        $ConfigDBFile = "../config/ConfigDB.json";

        if (file_exists($ConfigDBFile)) {
                
            $string = file_get_contents($ConfigDBFile);
            $json_a = json_decode($string, true);

            $this->SqlConnect = new mysqli($json_a['host'],$json_a['user'],$json_a['pass'],$json_a['dbname']);
            
            if ($this->SqlConnect->connect_error) {                    
                die('There is not connection to the Database. \n Check ConfigDB.json' . $conn->connect_error);
            } 
                
        } else {
            echo "$ConfigDBFile does not exist";
        }
        $this->name = "DBClass";   
    }

    function __destruct() {
        $this->SqlConnect->close();
    }
 

    function doQuery() {

        $queryText = "SELECT * FROM auxiliar.avl_VehiculoMarca";
            $result = $this->SqlConnect->query($queryText);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo $row["descripcion"];
            } 
         
    }
}

$objectDB = new DBClass();
 
echo $objectDB->doQuery();
?>