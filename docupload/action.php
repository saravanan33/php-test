<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "login";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if(isset($_POST['submit']))
{
    $title=$_POST['title'];

    $pname = rand(1000,10000)."-".$_FILES['file']['name'];

    $tname=$_FILES['file']['tmp_name'];

    $uploades_dir='image';

    move_uploaded_file($tname,$uploades_dir.'/'.$pname);
    $sql="INSERT INTO fileup (title,image) VALUES('$title','$pname')";
    if(mysqli_query($db,$sql))
    {
        echo "file upload success";
    }
    else
    {   
        echo "error";
    }
}
close($db);
?>