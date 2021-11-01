<!Doctype html>
<html>
    <head><title>test </title>
    <link href="boot.css"></head>

    <body class="container">
<?php
 $x=26.263;
 $y=(int)$x;
 $z=1;
echo "hello world";
echo "<br>";
echo "$y";
echo "<br>";
echo pi(2);
echo "<br>";
echo min(4,85,23,65);
echo "<br>";
echo max(4,85,23,65);

switch(";red")
{
case "red":
    echo "no is 25";
case "blue":
    echo "no is 26";
    
}
echo "<br><br>";
echo date ('y/m/d');
echo date ("l");
echo "<br><br>";
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE mydata2";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>