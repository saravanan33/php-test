<?php
ini_set("display_errors", 1);
include("../Model/LoginModel.php");
 if(!empty($_POST['empid']) && !empty($_POST['password'])){
        $empId             =  $_POST['empId'];
        $password          =  $_POST['password'];        
        $adminconn         =  new Database();
        $adminconn        -> ajaxcheck($empId,$password);
    }
    
$enter='';
if(isset($_POST["login"]))
{   
    $empId              =  $_POST['empId'];
    $password           =  $_POST['password'];
    $encryptpassword    =  md5($password);
    $controller         =  new Controller();
     $enter             =  $controller->controllerLogin($empId,$password);    
}
class Controller
{
    function controllerLogin($empId,$password){          
    $data              =  new Database();
    $loginValue        = $data->login($empId,$password);
    if($loginValue){       
        while($row=mysqli_fetch_array($loginValue))
        {
           $array[]=$row;           
        }
        if(count($array)>1){
            header("location:../View/AdminView.php");
        }
        elseif(count($array)==1){
            header("location:../View/EmployeeView.php");
        }
 
        return $array;
     }
    }
    
    

}
    



?>