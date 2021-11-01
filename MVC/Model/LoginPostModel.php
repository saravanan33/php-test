<?php session_start();
ini_set("display_errors", 1);
class DbFunction{
    public static function dbConnect(){
        $db =mysqli_connect("localhost","root","root","table" );
        if(!$db){
            die("something went wrong");
        }
        else{
            return $db;
        }
    }
    public function signUp($username,$email,$encryptPassword){
        $dbConection = self::dbConnect();
        $test        =mysqli_query($dbConection,"SELECT * FROM `form` WHERE email='".$email."'"); 
        if(mysqli_num_rows($test)==0)
        {
            $sql=mysqli_query($dbConection,"INSERT INTO form (user_name, password, email) VALUES ('".$username."','".$encryptPassword."','".$email."')");
            echo "insert successfully $username ,$email";
        }
        else{
            die("mailid already exit");
        }    
    }
    public function login($email,$encryptPassword){        
        $dbConection           = self::dbConnect();       
        $sql                   = mysqli_query($dbConection,"SELECT * FROM `form` WHERE  email='".$email."' and password='".$encryptPassword."'");
        $userData              = mysqli_fetch_array($sql);       
        $_SESSION['user_name'] = $userData['user_name'];
        $_SESSION['email']     = $userData['email'];
        $noOfRows              = mysqli_num_rows($sql);
        if($noOfRows==1){
            header("location:../View/welcome.php");
        }
        else{
          die("login failed");
        }
    }
}
?>   
