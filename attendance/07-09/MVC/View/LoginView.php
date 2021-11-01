<?php
session_start();
?>
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
      <body class="container">
        <h3> LOGIN FORM ATTENDANCE</h3>
        <form method="post" class="form-horizontal" action="../Controller/UserControll.php  " >
              <div class="row">
                <div class="col-md-1">
                  <lable for="empId" class="saravana" >EMP ID:</lable>
                </div>
                <div class="col-md-11">
                <span id="empError"></span>
                  <input type="text" id="empId" name="empId" class="form-inline" placeholder="empId" onblur="emptyId()" required ><br>
                  <span id="empId-error"  style='color: red;'></span>
                  <br>
                </div>
             </div>
                <div class="row">
                    <div class="col-md-1">
                        <lable for="pword" class="saravana" >PASSWORD: </lable>
                    </div>
                    <div class="col-md-11">
                        <input type="password" id="password" class="form-inline" placeholder="Enter password" name="password" required><br>
                        <span id="password-error" style='color: green;' class='status-available'></span>
                        
                    </div>
                </div>
               <div class="saravana">
                   <input type="checkbox"> Remember me
                </div><br>
                <button type="submit" id="login" name="login" class="btn btn-default" >submit</button><br><br>
                <!-- <a href ="CreatenewView.php">create new employee account</a> -->
            
        </form>
    </body>
     <script>
       
        function emptyId(){
  
          jQuery.ajax({
          url: "../Controller/ajax.php",
          data:'empId='+$("#empId").val(),
          type: "POST",
          success:function(data){            
              var html='';
                if(data=="success"){
                  html = "<span style='color: green;' class='status-available'>Available</span>";					
                  $('#login').prop('disabled', false);                 
                }
                else{
                  html = "<span style='color: red;' class='status-not-available'> ID Not Available.</span>";
                  $('#login').prop('disabled', true);
                  
                }
                  $("#empId-error").html(html);
            },
            error:function (){ }
            });
        }
          
        
        // function doLogin(){
           
        //     var empid=$("#empId").val();
        //     // var password=$("#password").val();
        //     var error='';
        //     if(empid==""){
        //       $("#empId-error").html("enter employee ID");
        //     }else{
        //       $.ajax({  
        //             type:"POST",
        //             url:"../Controller/ajax.php",
        //             data:'empid='+empid,
        //             success:function(result){                     
        //               if(result=='true'){
        //                 $('#empError').html('valid employee id');
        //               }

                    
        //         })
        //         }   

        //        }
                
        //     }
        </script> 
</html>