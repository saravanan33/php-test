<?php
ini_set("display_errors", 1);
include("../Model/DatabaseConnetion.php");
include("../Model/UserModel.php");
$userId =mysqli_real_escape($connection,$userCode);
$password=$_POST['password'];
$encpassword=md5($password);
$Conn = new DatabaseConnection();
$connection=$Conn->dbConnection();
print_r($userId);exit;
if(!empty($userId)){
    $db_handle = new UserModel();
    $idQuery = $db_handle->ajaxcheck($userId,$encpassword);
if(!empty($idQuery)){  
    echo "success";  
}
else{
    echo "wrong";
}
}
?>