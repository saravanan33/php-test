<!DOCTYPE html>
    <head>
        <title>
            login page
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body class="container" >
        <h3> LOGIN FORM ATTENDANCE</h3>
           <form method="post" class="form-horizontal" action="../Controll/LoginControll.php" >
              <div class="row">
                <div class="col-md-1">
                  <lable for="empId" class="saravana" >EMP ID:</lable>
                </div>
                <div class="col-md-11">
                <span id="empError"></span>
                  <input type="text" id="empId" name="empId" class="form-inline" placeholder="empId" required ><br>
                  <span id="empId-error"></span>
                  <br>
                </div>
             </div>
                <div class="row">
                    <div class="col-md-1">
                        <lable for="pword" class="saravana" >PASSWORD: </lable>
                    </div>
                    <div class="col-md-11">
                        <input type="password" id="password" class="form-inline" placeholder="Enter password" name="password"required ><br>
                        <span id="password-error"></span>
                        
                    </div>
                </div>
               <div class="saravana">
                   <input type="checkbox"> Remember me
                </div><br>
                <button type="submit" id="login" name="login" class="btn btn-default" >submit</button><br><br>
                <a href ="CreatenewView.php">create new employee account</a>
            
        </form>
    </body>
    <!-- <script>
        onclick="doLogin()"
          $(document).ready(function(){
            $("form").submit(function(event){
              event.preventDefault();
            });
          });
        
        function doLogin(){
           
            var empid=$("#empId").val();
            var password=$("#password").val();
            var error='';
            if(empid==""){
              $("#empId-error").html("empty empid");
            }
            
            if(password==""){
              $("#password-error").html('empty password');
            }
               if(empid!="" && password!=""){
                $.ajax({  
                    type:"POST",
                    url:"../Controll/LoginControll.php",
                    data:'empid='+empid+'&password='+password,
                    success:function(result){
                     
                      if(result=='true'){
                        $('#empError').html('valid emp id');
                      }

                    }
                })

               }
                
            }
        </script> -->
</html>