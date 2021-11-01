<?php
include("../Controll/LoginControll.php");

?>
<!DOCTYPE html> 
<head>
    <title>
        ADMIN VIEW 
    </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <body>
            <h1>hi<?php  echo "<br>".$_SESSION['emp_name']; ?></h1>
            <div><a href ="CreatenewView.php">create new employee account</a></div>
            <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='LoginView.php'">
        <span class="glyphicon glyphicon-log-out"></span>Logout</button>
        <table class="table table-bordered table-striped">
        <?php print_r($enter);exit; 
                    
            while($row=mysqli_fetch_array($enter)){
           $array=$row;           
        }     
        print_r($array);exit;
            ?>






        </table>



            
            
</head>
<body>