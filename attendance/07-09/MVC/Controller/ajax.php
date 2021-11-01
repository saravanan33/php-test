<?php
include("../Model/UserModel.php");
$userId =$_POST['empId'];
if(!empty($userId)){
    $db_handle = new Database();
    $idQuery = $db_handle->ajaxcheck($userId);
if(!empty($idQuery)){  
    echo "success";  
}}
?>