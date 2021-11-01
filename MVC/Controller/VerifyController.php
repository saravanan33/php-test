<?php 
ini_set("display_errors", 1);
require_once ('../Model/LoginPostModel.php');
$dataBase = new DbFunction();

if(isset($_POST['login'])){
     $email     =$_POST['email'];
     $password  =$_POST['password'];
     $encryptPassword=md5($password);
     $dataBase->login($email,$encryptPassword);
   
}
if(isset($_POST['signin'])){
     $username   =$_POST['username'];
     $email      =$_POST['email'];
     $password   =$_POST['password']; 
     $conPassword=$_POST['cpassword'];
     $encryptPassword=md5($password);
    
      if($password==$conPassword){

         $dataBase->signUp($username,$email,$encryptPassword);
      } 
      else{
         die("password and confirm password is wrong");
      }       
} 
?>