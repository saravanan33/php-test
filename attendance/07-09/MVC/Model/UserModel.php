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
    public function login($empId,$encryptpassword){
        $dbConn                     = self::dbConnect();
        $loginData                  = "SELECT * FROM `user_detailes` WHERE `user_id` ='".$empId."' and `user_password` ='".$encryptpassword."'"; 
        $res                        = mysqli_query($dbConn,$loginData);
        print_r($dbConn);exit;
        $userData                   = mysqli_fetch_array($res);
        if(!empty($userData)){
        $_SESSION['user_name']       = $userData['user_name'];
        $_SESSION['user_id']         = $userData['user_id'];
        $_SESSION['user_mobile']     = $userData['user_mobile'];
        $_SESSION['user_email']      = $userData['user_email'];
        $_SESSION['user_address']    = $userData['user_address'];
          if($userData['user_tag']=='A'){
                $joinTable="SELECT  d.user_id,
                                    d.user_name, 
                                    d.user_mobile,
                                    d.user_address,
                                    d.user_email,
                                    a.user_intime,
                                    a.user_outtime,
                                    a.user_shift 
                                        FROM user_detailes d
                                        JOIN user_attendances a
                                        WHERE  d.user_id=a.user_id";
                                        $res1       = mysqli_query($dbConn,$joinTable);
                                        return $res1;
                                    }
            elseif($userData['user_tag']=='E'){
                $showTable="SELECT * FROM `user_attendances` WHERE 'user_id'='".$empId."'";
                $res2       = mysqli_query($dbConn,$showTable); 
                return $res2;
            }
        }
        else{
            echo "<script type='text/javascript'>alert('wrong username and password');</script>";
        
            header('location:../View/LoginView.php');
            // die ("wrong username and password") ;
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
    public function insertData($name, $id, $encryptpassword, $email,  $mobile, $address, $tag){
        $dbConn        = self::dbConnect(); 
        $checkData     = "SELECT * FROM `user_detailes` WHERE emp_id='".$id."'";
        $result        = mysqli_query($dbConn,$checkData);
        if(!$result=0){
            $insertData       = "INSERT INTO `user_detailes`(emp_id, emp_name, emp_password, emp_mobile, emp_email, emp_address, emp_tag) VALUES ('".$id."','".$name."','".$encryptpassword."','".$mobile."','".$email."','".$address."','".$tag."')";
            $dataInsert       = mysqli_query($dbConn,$insertData);
            
            if($dataInsert){
            echo ("insert successfully");
        }
    }
    else{
        echo ("emp id already exist");
    }
    }
    public function inTime(){
        $dbConn        = self::dbConnect(); 
        $insertTime    = "SELECT now()";
      }
      public function ajaxcheck($userId){
        $dbConn        = self::dbConnect();
        $query         = "SELECT * FROM `user_detailes` WHERE `user_id` LIKE '%$userId%'";
        $result        = mysqli_query($dbConn,$query);
        $result1        = mysqli_fetch_object($result);
        return $result1;
      }
}