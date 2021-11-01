<?php

$con=mysqli_connect("localhost","root","root","login");
if(!$con)
{
    echo "Something Went Wrong";
}
$chk="";
$checkbox=$_POST['hobbie'];
foreach($checkbox as $ch)
{
  $chk .= $ch.",";
}

$statusMsg = '';

$targetDir = "uploads/";

$file_tmpname="";
$file_name="";


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
  foreach ($_FILES['file']['tmp_name'] as $key => $value) 
  {
             
    $file_tmpname = $_FILES['file']['tmp_name'][$key];
    
    $file_name = rand(1000,10000)."-".$_FILES['file']['name'][$key];

  }
  
    $targetFilePath = $targetDir . $file_name;
   
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
      
      if(move_uploaded_file($file_tmpname, $targetFilePath))
      {
            $fileUrl="http://localhost/25-08-2021(Task)/uploads/$file_name";
            $sql = "INSERT INTO form(firstname, lastname, email, dob, gender, address, country, state, department, technology, hobbie, file_name, uploaded_on) VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["dateofbirth"]."','".$_POST["gender"]."','".$_POST["address"]."','".$_POST["country"]."','".$_POST['state']."','".$_POST['department']."','".$_POST['technology']."','".$chk."','".$file_name."','".$fileUrl."')";
            if($con->query($sql))
            {
              $statusMsg = "The file ".$file_name. " has been uploaded successfully.";
            }
            else
            {
              $statusMsg = "File upload failed, please try again.";
            } 
      }
      else
      {
          $statusMsg = "Sorry, there was an error uploading your file.";
      }
    }
    else
    {
      $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
  
}
else
{
  $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;


?>
<!DOCTYPE html>
<html>
  <body>
    <h1>to view record<a href="record.php">click here</a></h1>
  </body>
</html>














