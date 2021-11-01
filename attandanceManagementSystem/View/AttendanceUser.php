<?php
ini_set("display_errors", 1);
session_start();
?>
<!DOCTYPE html> 
<head>
    <title>
       ATTANDANCE PAGE 
    </title>
    <style>
    .header {
  padding: 6px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
      function GetDateTimefunction(){
        var DateTime=new Date();
        $('#demo').html(DateTime);            
      }
      $(document).ready(function(){        
        setInterval(GetDateTimefunction,100);
        $("#btn2").hide();
        $("#btn2").click(function(DateTime){
          $("#btn2").hide();
          $("#btn1").show();                           
        });
        $("#btn1").click(function(DateTime){
          $("#btn1").hide();
          $("#btn2").show();              
        });
      });
    </script>
</head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       
        

        <h1 class="header "><center>ATTENDANCE FOR ADMIN AND EMPLOYEE</center></h1><br> 
        <h4 ><center>HI&nbsp;<?php if($_SESSION['user_roll']=='A'){echo "ADMIN";} else{echo "EMPOLYEE";} echo"<br>".$_SESSION['user_name']; echo "<br> your employee id is".$_SESSION['user_code'];  ?></center></h4>
        <center>
        <button type="button" id="btn1" name="btn1" class="btn btn-success">check In</button>
        <button type="button" id="btn2" name="btn2" class="btn btn-info">check out</button>
        <p id="demo"></p>
         <div class="sidenav">
        <button class="button button3">show</button>
        <button class="button button3">edit</button>
        <button class="button button3">leave</button>
   </div>

      </center>