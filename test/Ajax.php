<?php
include'db.php';


class Ajax{
public function mail($mail){

        global $con; 
              
        $mail_array = array($mail);      

        $split_mail = explode(",",$mail_array[0]);

        $count = count($split_mail);;

        foreach($split_mail as $val){
            $value[] ="'$val'";
            
        }

        $mailstr=implode(",",$value);
        // print_r($name1);

        $query = "SELECT * FROM login WHERE username IN ($mailstr)";        
        $result = $con->query($query);
        if($result->num_rows==($count)) {
            echo "success";
        }else{   
            echo "failed";
        }
    
    }


    public function ccMail($mail){

        global $con; 
              
        $mail_array = array($mail);      

        $split_mail = explode(",",$mail_array[0]);

        $count = count($split_mail);;

        foreach($split_mail as $val){
            $value[] ="'$val'";
            
        }

        $mailstr=implode(",",$value);
        // print_r($name1);
        
        $query = "SELECT * FROM login WHERE username IN ($mailstr)";        
        $result = $con->query($query);
        if($result->num_rows==($count)) {
            echo "success";
        }else{   
            echo "failed";
        }
    
    }

    public function bccMail($mail){

        global $con; 
              
        $mail_array = array($mail);      

        $split_mail = explode(",",$mail_array[0]);

        $count = count($split_mail);;

        foreach($split_mail as $val){
            $value[] ="'$val'";
            
        }

        $mailstr=implode(",",$value);
        // print_r($name1);
        
        $query = "SELECT * FROM login WHERE username IN ($mailstr)";        
        $result = $con->query($query);
        if($result->num_rows==($count)) {
            echo "success";
        }else{   
            echo "failed";
        }
    
    }

    public function loginmail(){
        ?>
        <span style="color: red;" class='status-not-available'> Please Check the Mail ID.</span>
        <?php
    }
    public function loginpassword(){
        ?>
        <span style="color: red;" class='status-not-available'> PleaseCheckPassword-(Max-8)</span>
        <?php
    }
    

}



?>