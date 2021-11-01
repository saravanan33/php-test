<?php session_start();
$_SESSION['username']=$_POST['username'];

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$databasename="table";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$databasename);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>


<html>
    <head>
        <title> enter page</title>
        <link rel="stylesheet" href="css files/boot.css">
    </head>
    <body class="container"><br>
    <a href="login1.php"> <button type="button" value="LOGOUT" style="float: right;" name="logout" onclick="myfunction()"  >LOGOUT</button></a>
     <?php   echo "<h3> WELCOME...</h3>".$_SESSION['username'];?><br><br>
  <script>
  function myfunction()
  {
  session_unset()
    
  }
</script>


<table style="width: 100% ;">
<tr>
    <th>s.no    </th>
    <th>first name</th>
    <th> father name</th>
    <th>mobile</th>
    <th>location</th>
    <th>edit</th>
    <th>remove</th>
    </tr>
<?php
$rec=mysqli_query($conn,"select * from logintable");
while($data=mysqli_fetch_array($rec))
{
?>
<tr>
    <td><?php echo $data['id'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['fathername'];?></td>
    <td><?php echo $data['mobile'];?></td>
    <td><?php echo $data['location'];?></td>
    <td><a href ="edit.php"><button type="button" class="glyphicon glyphicon-pencil" >edit</button></a>
    <td><a href ="delete.php"><button type="button" class="glyphicon glyphicon-trash" >delete</button></a>
</tr>
<?php
}
?>
</table>
<?php mysqli_close($conn);
?>
    </body>
       </html>
    









        
    