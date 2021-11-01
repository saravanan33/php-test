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
          $(document).ready(function(){
            $("form").submit(function(event){
              event.preventDefault();
            });
          });
          </script>
</head>
<body class="container">
    <h3>CREATE EMPLOYEE PROFILE</h3><br>
    <form method="POST" action="../View/LoginView.php" >
    <div class="row">   
        <div class="col-md-3">
           <label for="employeeName" >EMPLOYEE NAME:</label>
        </div>
        <div class="col-md-9">
           <input type="text" id="employeeName" name="employeeName"> 
        </div> 
    </div><br>
    <div class="row"> 
      <div class="col-md-3">
        <label for="employeeid" >EMPLOYEE id:</label>
      </div>
        <div class="col-md-9">
         <input type="text" id="employeeid" name="employeeid">
       </div> 
    </div> <br>
      <div class="row">
        <div class="col-md-3">
            <label for="employeePassword" >EMPLOYEE password:</label>
        </div>
        <div class="col-md-9">
            <input type="text" id="employeePassword" name="employeePassword">
        </div> 
     </div><br>  
      <div class="row">
        <div class="col-md-3">
            <label for="employeeconPassword" >EMPLOYEE confirm password:</label>
        </div>
        <div class="col-md-9">
            <input type="text" id="employeeconPassword" name="employeeconPassword">
        </div>
      </div>  <br>
      <div class="row">
        <div class="col-md-3">
            <label for="employeeEmail" >EMPLOYEE EMAIL:</label>
        </div>
        <div class="col-md-9">
            <input type="text" id="employeeEmail" name="employeeEmail">
        </div>
      </div> <br>
      <div class="row">
        <div class="col-md-3">
            <label for="employeeEmail" >EMPLOYEE phone number:</label>
        </div>
        <div class="col-md-9">
            <input type="text" id="phoneno" name="phoneno">
        </div>
      </div> <br>
      <div class="row">
        <div class="col-md-3">
            <label for="employeeEmail" >EMPLOYEE address:</label>
        </div>
        <div class="col-md-9">
            <input type="text" id="address" name="address">
        </div>
      </div> <br>
      
      <input type="submit" name="submit" id="submit"> 
      <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='LoginView.php'">
      <span class="glyphicon glyphicon-log-out"></span>Logout</button>
    </form>
</body>
</html>