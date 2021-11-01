
<!DOCTYPE html>
<html>
    <head>
       <title>register page</title>
        <link  rel="stylesheet" href="css files/boot.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    </head>
    <body class="container" >
        <h3> REGISTER FORM USER</h3>
       <form method="post" class="form-horizontal" action="..\Controller\VerifyController.php" id="form"  >
             USER NAME:
             <input type="text" id="uname" name="username"  required size="10" class="form-inline" placeholder="Username" onblur="validateUsername()">
             <h5 id="usercheck" style="color: red;" > **Username is missing</h5>
             <br><br>
             PASSWORD:
             <input type="password" id="password" class="form-inline" placeholder="Enter password" name="password" onblur="validatePassword()" required>
             <h5 id="passcheck" style="color: red;">**Please Fill the password</h5><br><br>   
             CONFIRM PASSWORD:
             <input type="password" id="cpassword" class="form-inline"  placeholder="Enter confirm password" name="cpassword" onblur="validateConfirmPasswrd()">
             <h5 id="conpasscheck" style="color: red;">**Password didn't match</h5><br>  <br>
             EMAIL ID:
             <input type="text" id="email" name="email"  class="form-inline" placeholder="email" onblur="validateEmail()">
             <small id="emailvalid" class="form-text text-muted invalid-feedback">Your email must be a valid email  </small>
             <span id="alertmailid"></span><br><br><br>
             <input type="submit" name="signin" id="submit" value="submit">
            <button type="button" value="back"  onclick="location.href='login.php'" >back</button>
       </form> 
       <script src="test.js"></script>
     </body> 
</html> 