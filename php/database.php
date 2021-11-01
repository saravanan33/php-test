<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
 echo ("Connection failed: " . $conn->connect_error);
}
die ("Connected successfully");
$sql="CREATE DATABASE mysaro";
if($conn->query($sql)===true)
{
    echo "data base created succesfully";
}
else{
    echo "error creating conn".$conn->error;
}
$conn->close();
?>
