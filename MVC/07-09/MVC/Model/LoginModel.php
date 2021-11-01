<?php
session_start();
class Database
{
    public static function dbConnect(){
        $db =mysqli_connect("localhost","root","root","employee" );
        if(!$db){
            die("connection error");
        }
        else{
            return $db;
        }
    }
    public function login($empId,$password){
        $dbConn                     = self::dbConnect();
        $loginData                  = "SELECT * FROM `user_detailes` WHERE emp_id='".$empId."' and emp_password='".$password."'; ";
        $res                        = mysqli_query($dbConn,$loginData);
        $userData                   = mysqli_fetch_array($res);
        $_SESSION['emp_name']       = $userData['emp_name'];
        $_SESSION['emp_id']         = $userData['emp_id'];
        $_SESSION['emp_mobile']     = $userData['emp_mobile'];
        $_SESSION['emp_email']      = $userData['emp_email'];
        $_SESSION['emp_address']    = $userData['emp_address'];
          if(!empty($userData)){
            if($userData['emp_tag']=='A'){
                $joinTable="SELECT  
                                    d.emp_id,
                                    d.emp_name, 
                                    d.emp_mobile,
                                    d.emp_address,
                                    d.emp_email,
                                    a.emp_intime,
                                    a.emp_outtime,
                                    a.emp_shift 
                                        FROM user_detailes d
                                        JOIN user_attendances a
                                        WHERE  d.emp_id=a.emp_id1";
                                        $res1       = mysqli_query($dbConn,$joinTable);
                                        return $res1;
                                    }
            elseif($userData['emp_tag']=='E'){
                $showTable="SELECT * FROM `user_attendances` WHERE emp_id1='".$empId."'";
                $res2       = mysqli_query($dbConn,$showTable);
                return $res2;
            }
        }
    }
    
//     public function ajaxcheck($empId,$password){
//         $dbConn            = self::dbConnect();
//         $sql               = "SELECT * FROM `user_detailes` WHERE emp_id='".$empId."'AND emp_password='".$password."'";
//         $res               = mysqli_query($dbConn,$sql);
//         $userData          = mysqli_num_rows($res); 
//         if(!empty($userData)){
//             echo "true";
//     }
// }
}