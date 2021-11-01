<?php 
require_once "config.php";
$sql = "SELECT * FROM employees WHERE name='".$_POST['username']."'and password='".$POST['password']; ?>


<!DOCTYPE html>
<html>
    <head>
        <title> LOGIN PAGE</title>
        <link rel="stylesheet" href="css files/boot.css">
        <script>
          function login()
          {
            var uname = document.getElementById("uname").value;
		        var pword = document.getElementById("pword").value;
            if(uname =='')
		        {
		       	alert("please enter user name.");
		         }
	       	else if(pword=='')
		      {
        	alert("enter the password");
		       }
           else if(pword.length>6)
           {
            alert("Password min and max length is 6.");
           }
          }
          function clearFunc()
	        {
	        	document.getElementById("email").value="";
		       document.getElementById("pword").value="";
         	}
          </script>
    </head>
    

    <body class="container" >
        <h3> LOGIN FORM USER</h3>
     <form method="POST" class="form-horizontal" action="index.php" >
      USER NAME:&nbsp;&nbsp;&nbsp;
      <input type="text" id="uname" name="username" required size="10" class="form-inline" placeholder="Username" minlength="4" maxlength="8"><br><br>
      PASSWORD:&nbsp;&nbsp;&nbsp; <input type="password" id="pword" class="form-inline" placeholder="Enter password"
       name="password" min="8" max="10" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div><br>
      <input type="submit" value="submit" class="btn btn-default" onclick="login()" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" value="reset" class="btn btn-default" onclick="reset()" /><br><br>
      <a href ="page.php">create new account</a>
      </form>
      
    </body>
</html>