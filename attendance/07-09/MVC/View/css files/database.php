<?php

ini_set("display_errors", 1);
print_r($_REQUEST);exit;
class dbconecion
{
    public function __construct()
    {   
        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbName     = "table";
 
        $db =mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
            if ($db->connect_error)
            {
                die("Connection failed: " . $db->connect_error);
            }
    }

   public function signin()
{
    $name      =$_POST['username'];
    $password  =$_POSTbutton['password'];
    $email     =$_POST['email'];

    if(isset($_POST['submit']))
    {
       $query  = 'select email from form where= "'.$email.'"';
       $result = mysqli_query($db, $query);

     
        if ($result==true)
     {
         die("already exit");
     }
     else{

     
      $sql ="INSERT INTO form (`username`, `password`, `email`) VALUES ('$name', '$password',$email)";      
    if(mysqli_query($db, $sql))
    {
      echo "sign in successfully";
     }
}}

}

public function login()
{
    $name      =$_POST['username'];
    $password  =$_POSTbutton['password'];
    if(isset($_POST['submit']))
    {
        $query  = 'select username from form where= "'.$username.'"';
        $result = mysqli_query($db, $query);
        if($result==true)
        {
            
        }
        else
        {
            alert("user name not exist");
        }print_r($_POST);exit;

}
}}

?> 