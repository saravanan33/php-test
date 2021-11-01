<?php
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
    <head>
        <title>login password_get_info</title>
        <link  rel="stylesheet" href="css files/boot.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
    </head>
    <body class="container" >
               
     <h3> LOGIN FORM USER</h3>
        <form method="post" class="form-horizontal" action="../Controller/VerifyController.php" >
            <div class="row">
                <div class="col-md-3">
                    <lable for="email">EMAIL ID:</lable>
                </div>
                <div class="col-md-9">
                    <input type="email" id="email" name="email" class="form-inline" placeholder="email" >
                </div><br><br>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <lable for="pword">PASSWORD: </lable>
                </div>
               <div class="col-md-9">
                 <input type="password" id="pword" class="form-inline" placeholder="Enter password" name="password" >
                </div><br>
            </div>
            <div>
                <input type="checkbox"> Remember me
            </div><br>
            <input type="submit" name="login" value="submit" class="btn btn-default"  /><br><br>
            <a href ="signin.php">create new account</a>
        </form>        
   </body>
</html>