<?php
session_start();
include "DatabaseConnetion.php";
class UserModel{
    function UserModelLogin($empId,$encryptpassword){
        $Conn = new DatabaseConnection();
        $connection=$Conn->dbConnection();
        $loginData="SELECT * FROM `user_detailes` WHERE `user_code` = $empId and `user_password` ='$encryptpassword'"; 
        $userData=mysqli_query($connection,$loginData);
        $userData=mysqli_fetch_array($res);                  
        if(!empty($userData)){
            $_SESSION['user_name']=$userData['user_name'];
            $_SESSION['user_code']=$userData['user_code'];
            $_SESSION['user_roll']=$userData['user_roll'];
            $_SESSION['user_code']=$userData['user_code'];
            return $userData;
            // if($userData['status']=='A'){
            // }
            // $_SESSION['user_mobile']=$userData['user_mobile'];
            // $_SESSION['user_email']=$userData['user_email'];
            // $_SESSION['user_address']=$userData['user_address'];
            // $_SESSION['status']=$userData['status'];
            // if($userData['status']=='A'){
            //     if($userData['user_roll']=='A'){
            //         $joinTable="SELECT  d.user_code, d.user_name, d.user_mobile, d.user_address, d.user_email, a.user_intime, a.user_outtime, a.user_shift FROM user_detailes d JOIN user_attendances a WHERE  d.user_code=a.user_code";
            //         $res1=mysqli_query($connection,$joinTable);
            //         // return $res1;
            //         $admin=1;
            //         return 'admin';
            //     }
            //     elseif($userData['user_roll']=='E'){
            //         // $showTable="SELECT * FROM `user_attendances` WHERE 'user_id'='".$empId."'";
            //         // $res2=mysqli_query($connection,$showTable); 
            //         // return $res2;
            //         $employee=1;
            //         return 'employee';
            //     }
            } 
        //     else{
        //         echo "user is inactive";           
        //       }
        //     }
        // else{
        //      echo "user id is wrong";
        // }
    }
    // function ajaxcheck($userId,$encpassword){
    //     $Conn = new DatabaseConnection();
    //     $connection=$Conn->dbConnection();
    //     $ajaxCheck="SELECT * FROM `user_details` WHERE `user_code`='".$userId."' and `user_password`='".$encpassword."'";
    //     $result=mysqli_query($connection,$ajaxCheck);
    //     $userData=mysqli_fetch_assos($result);
    //     return $result;
    // }
    function userEdit(){
        $Conn = new DatabaseConnection();
        $connection=$Conn->dbConnection();
        $useredit="UPDATE `user_detailes`
         SET         
        `user_name`='".$username."',
        `user_password`='".$encpassword."',
        `user_mobile`='".$mobile."',
        `user_email`='".$email."',
        `user_address`='".$address."',      
        `updated_by`='".$name."',
         WHERE `user_code`='".$userId."'";
         $result=mysqli_query($connection,$useredit);
         $userData=mysqli_fetch_assos($result);
        }
        // function insertNew(){
        //     $Conn = new DatabaseConnection();
        //     $connection=$Conn->dbConnection();
        //     $userInsert="INSERT INTO `user_detailes`(`user_code`, `user_name`, `user_password`,
        //      `user_mobile`, `user_email`, `user_address`, `user_roll`, `created_by`, `updated_by`, 
        //      , `status`) 
        //     VALUES ('".."','".."','".."','".."','".."','".."','".."','".."','".."','".."',)";

        // }
}

?>