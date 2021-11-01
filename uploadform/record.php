<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "login";
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
<!DOCTYPE html>
      <html>
          <head>
              <link  rel="stylesheet" href="css files/boot.css">
              
              <title>
                 success
              </title>
              
          </head>
          <body class="container">
<h2>susscess fully data insert</h2>
<table>
  <?php
  $sl="select * from form";
  $res=mysqli_query($db,$sl);
    while($row=mysqli_fetch_array($res))
    {      
    ?>
    <table class="table table-bordered table-striped">
  <tr>
      <th>id: </th>
      <th>name </th>
      <th>fathername </th>
      <th>gender</th>
      <th>dob</th>
      <th>department</th>
      <th>passed out</th>
      <th>yop</th>
      <th>address</th>
      <th>mobile</th>
      <th>country</th>
      <th>file</th>
      <th>sport</th>
      <th>intrest</th></tr>
    <tr>
    <td><?php echo $row['id'];?></td>     
    <td><?php echo $row['firstname'];?></td>   
    <td><?php echo $row['fathername'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['DOB'];?></td>   
    <td><?php echo $row['department'];?></td>    
    <td><?php echo $row['passedout'];?></td>    
    <td><?php echo $row['yop'];?></td>     
    <td><?php echo $row['address'];;?></td>    
    <td><?php echo $row['mobile'];?></td>  
    <td><?php echo $row['country'];;?></td>    
    <td><?php    
    $i=explode("*",$row['file']);      
    foreach($i as $a)
    {    
      echo "<img src='$a' width='50' height='60'>";      
    }
    ?></td> 
    <td><?php echo $row['checkbox'];?></td>   
    <td><?php echo $row['intrest'];?></td></tr>
    </table>
    </html>
    <?php
    } 
    ?>