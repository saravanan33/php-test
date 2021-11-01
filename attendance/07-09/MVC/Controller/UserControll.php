<?php
ini_set("display_errors", 1);
include("../Model/UserModel.php");
//  if(!empty($_POST['empid']) && !empty($_POST['password'])){
//         $empId             =  $_POST['empId'];
//         $password          =  $_POST['password'];        
//         $adminconn         =  new Database();
//         $adminconn        -> ajaxcheck($empId,$password);
//     }
if(isset($_POST["login"]))
{ 
   
    $empId              =  $_POST['empId'];
    $password           =  $_POST['password'];
    $encryptpassword    =  md5($password);
    $controller         =  new Controller();
    $val                = $controller->controllerLogin($empId,$encryptpassword);

    print_r($val);exit;
    if(count($val)==1){
        header("location:../View/EmployeeView.php?value=".urlencode(serialize($val)));
    }
    elseif(count($val)>1){
        header("location:../View/AdminView.php?value=".urlencode(serialize($val)));
    }
    }
    if(isset($_POST["insert"])){
        $name=$_POST['emp_name'];
        $id=$_POST['emp_id'];
        $password=$_POST['emp_password'];
        $encryptpassword=md5($password);
        $email=$_POST['emp_email'];
        $mobile=$_POST['emp_mobile'];
        $address=$_POST['emp_address'];
        $tag=$_POST['emp_tag'];
        $insert=new Database();
        $insert->insertData($name, $id, $encryptpassword, $email,  $mobile, $address, $tag);

        
    }
class Controller
{
    function controllerLogin($empId,$encryptpassword){          
    $data              =  new Database();
    $loginValue        = $data->login($empId,$encryptpassword);

    print_r($loginValue);exit;

    $array = [];
    if($loginValue){       
        while($row=mysqli_fetch_object($loginValue))
        {
           $array[]=$row;           
        }
          
     }
     return $array; 
    }  
}
?>