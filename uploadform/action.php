<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "Root@123";
$dbName     = "login";
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error)
 {
    die("Connection failed: " . $db->connect_error);
}
else{
  echo "conn success";
}
$firstname    =$_POST['firstname'];
$fathername   =$_POST["fathername"];
$gender       =$_POST["gender"];
$dob          =$_POST["dob"];
$department   =$_POST["department"];
$passedout    =$_POST["passedout"];
$yop          =$_POST["yop"];
$address      =$_POST["address"];
$mobile       =$_POST["mobile"];
$country      =$_POST["country"];
$check        =$_POST["vehicle"];
$chk          ="";
$int          =$_POST["intrest"];
$upload       ="image/";
$fileType     = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
$uploadDate   = date('Y-m-d H:i:s');
$uploadOk     = 1;
$allowedFileType = array('jpg','png','jpeg');
$total        =array();
$acount       =count($_FILES["file"]["name"]);
echo "no of files .$acount<br>";


if(isset($_POST['submit']))
{    
  
 
    if(!empty(array_filter($_FILES["file"]["name"])))
    {  
   for($i=0;$i<$acount;$i++)
   {
  $tname  =$_FILES["file"]["tmp_name"][$i];
  $target  =$upload.$_FILES["file"]["name"][$i];
 
    
    if(move_uploaded_file($tname,$target))
    {  
   
     echo "image upload".$tname;
    }
    else
    {
      echo "file not upload<br>";
    }
    $link[$i]="http://localhost/php/uploadform/$target";
  }
  
  $string=implode("*",$link); 
  
    }
  


  foreach($check as $ck)
  {
    $chk .= $ck.",";
  }


$sql = "INSERT INTO form(firstname, fathername,  gender, DOB,department,passedout,yop,address,mobile, country,file,checkbox,intrest)
  VALUES('".$_POST['firstname']."','".$_POST["fathername"]."',  '".$_POST["gender"]."','".$_POST["dob"]."','".$_POST["department"]."',
  '".$_POST["passedout"]."', '".$_POST["yop"]."','".$_POST["address"]."',
  '".$_POST["mobile"]."','".$_POST["country"]."','".$string."','".$chk."','".$int."')";
}
else{
  echo "file not selected";
}
  
  if($db->query($sql)==true)


  {
    ?>
   <!DOCTYPE html>
      <html>
          <head>
              <link  rel="stylesheet" href="css files/boot.css">
              
              <title>
                 success
              </title>
          </head>
     <h3>register successfully</h3><br><br>
     <tr>
   
    <td><?php echo "username:    ".$_POST['firstname'];?></td> <br><br>
    <td><?php echo "fathername:  ".$_POST['fathername'];?></td><br><br>
    <td><?php echo "gender:      ".$_POST['gender'];?></td><br><br>
    <td><?php echo "DOB:         ".$_POST['DOB'];?></td>   <br><br>
    <td><?php echo "department:  ".$_POST['department'];?></td> <br><br>  
    <td><?php echo "passedout:   ".$_POST['passedout'];?></td>  <br><br>  
    <td><?php echo "yop:         ".$_POST['yop'];?></td>    <br><br>
    <td><?php echo "address:     ".$_POST['address'];;?></td>   <br><br> 
    <td><?php echo "mobile:      ".$_POST['mobile'];?></td>  <br><br>
    <td><?php echo "country:      ".$_POST['country'];;?></td> <br><br>   
    <td><?php echo "file:         ".$link;?></td> <br><br>
    <td><?php echo "checkbox:     ".$chk;?></td>   <br><br>
    <td><?php echo "intrest:      ".$int;?></td></tr><br><br>
    </table>
        
    
     <a href="record.php">click here</a>
     </html>
     
     <?php
      $img=explode("*",$string);
      for($i=0;i<count($img);$i++)
      {
           echo "<img src='$img[$i]'>";

      }
         
  }


  

  else
    {
     echo "error";
     }
     mysqli_close($db);

  


?>
