<?php  
ini_set("display_errors", 1);
include "../Model/UserModel.php";
if(isset($_POST['login'])){ 
    $empId= $_POST['usercode'];
    $password=$_POST['password'];
    $encryptpassword=md5($password);
    $controller=new UserModel();
    $value=$controller->UserModelLogin($empId,$encryptpassword);
    $val=mysqli_fetch_array($value);
    $userCode=$val['user_code'];
    $userName=$val['user_name'];
    $userMobile=$val['user_mobile'];
    $userAddress=$val['user_address'];
    $userPassword=$val['user_password'];
    $userEmail=$val['user_email'];
    $userRoll=$val['user_roll'];
    header("location:../View/AttendanceUser.php?value=$userCode,$userName,$userMobile,$userAddress,$userPassword,$userEmail,$userRoll");
}