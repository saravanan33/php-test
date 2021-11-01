<?php
include("../Controll/LoginControll.php");
?>
<!DOCTYPE html> 
<head>
    <title>
        EMPLOYEE VIEW 
    </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
          function GetDateTimefunction(){
            var DateTime=new Date();
            $('#demo').html(DateTime);            
          }
          $(document).ready(function(){        
            setInterval(GetDateTimefunction,1000);
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
  <body class="container">
      <h3><center>EDIT & VIEW EMPLOYEE PROFILE</center></h3><br>
        <h4>hi<?php  echo"<br>".$_SESSION['emp_name'];  ?></h4>
        <?php  echo"<br>".$get=$_GET['enter']; ?>
      <center>
        <button type="button" id="btn1" name="btn1" class="btn btn-success">check In</button>
        <button type="button" id="btn2" name="btn2" class="btn btn-info">check out</button>
        <p id="demo"></p>
      </center>
      <button type="button" id="btn3" name="btn3" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </svg>
      </button>
      <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='LoginView.php'">
        <span class="glyphicon glyphicon-log-out"></span>Logout</button>
        
      </body>
    </html>