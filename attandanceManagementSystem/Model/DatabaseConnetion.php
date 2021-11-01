<?php
ini_set("display_errors", 1);
class DatabaseConnection{
    function dbConnection() {    
        $db =mysqli_connect("localhost","root","Root@123","employee" );
        
        if(!$db){
            die("something went wrong");
        }
        else{
            return $db;
        }        
    }
}
?>

