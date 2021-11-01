<?php
include_once("Loginpost.php");
$dataBase=new DbFunction();
if(isset($_POST['login']))       
{
     $email     =$_POST['email'];
     $password  =$_POST['password'];
     $dataBase->login($email,$password);
}  

if(isset($_POST['signin']))  
{
     $username   =$_POST['username'];
     $email      =$_POST['email'];
     $password   =$_POST['password']; 
     $conPassword=$_POST['cpassword'];

      if($password==$conPassword) {

         $dataBase->SignIn($username,$email,$password);
      } 
      else{
          die("password and confirm password is wrong");
      }       
} 
?>