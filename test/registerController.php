<?php
session_start();

include '../Model/RegisterModel.php';

class RegisterController
{
        public function registerControl()
        {

            header("Location:../View/register.php"); 

        }
                public function registerData($name,$password,$status,$picure)
                {
                        
                        $Register = new Register();
                        $result   = $Register->regModel($name,$password,$status,$picure);
                        
                        if (($result)>0){
                        
                            header("Location:../View/login.php");
                            exit;
                            
                        }
                        else
                        {
                            die('registration failed');
                        }


	            }
    
}


    if(isset($_POST['register']))
    {

    $registerController = new RegisterController();
    $registerController -> registerControl();

    }

    if (isset($_POST['Regsubmit']))
    { 
        $name       = $_POST['name'];
        $password   = $_POST['password1'];
        $status     ='A';

        $picure=$_FILES['file']["name"];    
        $upload_dir='../View/image';
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$upload_dir.'/'.$picure))
        {
            echo "upload success";
        }else
        {
            echo "failed";
        }

        $registerController = new RegisterController(); 
        $registerController->registerData($name,$password,$status,$picure);
    } 
?>
