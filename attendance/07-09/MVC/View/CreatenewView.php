<!DOCTYPE html> 
<head>
    <title>
        EMPLOYEE VIEW 
    </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
    <body class="container">
      <h3>CREATE EMPLOYEE PROFILE</h3><br>
        <form name="myform"  >
        <!-- method="POST" action="../Controller/UserControll.php" -->
          <div class="row">   
              <div class="col-md-3">
                <label for="employeeName" >EMPLOYEE NAME:</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="employeeName" name="emp_name"  required> 
                <span id="name">*Enter name</span>
              </div> 
          </div><br>          
            <div class="row">
              <div class="col-md-3">
                  <label for="employeePassword" >EMPLOYEE password:</label>
              </div>
              <div class="col-md-9">
                  <input type="password" id="employeePassword" name="emp_password" onblur="mypass()" required>
                  <span id="pass">*password Must be atleast 5 to 8 characters </span>
              </div> 
          </div><br>  
            <div class="row">
              <div class="col-md-3">
                  <label for="employeeconPassword" >EMPLOYEE confirm password:</label>
              </div>
              <div class="col-md-9">
                  <input type="password" id="employeeconPassword"  name="emp_cPassword" required>
                  <span id="conpass"></span>
              </div>
            </div>  <br>
            <div class="row">
              <div class="col-md-3">
                  <label for="employeeEmail" >EMPLOYEE EMAIL:</label>
              </div>
              <div class="col-md-9">
                  <input type="text" id="employeeEmail" name="emp_email"  required>
                  <span id="usermail"></span>
                </div>
            </div> <br>
            <div class="row">
              <div class="col-md-3">
                  <label for="employeeEmail" >EMPLOYEE phone number:</label>
              </div>
              <div class="col-md-9">
                  <input type="text" id="phoneno" name="emp_mobile" required>
                  <span id="mobile"></span>
              </div>
            </div> <br>
            <div class="row">
              <div class="col-md-3">
                  <label for="employeeEmail" >EMPLOYEE address:</label>
              </div>
              <div class="col-md-9">
                  <input type="text" id="address" name="emp_address" required>
                  <span id="useraddress"></span>
              </div>
            </div> <br>
            <div class="row">
              <div class="col-md-3">
                  <label for="employeetag" >EMPLOYEE tag:</label>
              </div>
              <div class="col-md-9">
                <select id="employeetag" name="emp_tag" required>
                  <option value="A">A</option>
                  <option value="E">E</option>
              </select>
              </div>
            </div> <br>
            
            <input type="submit" name="insert" id="submit" > <span id="end"></span>
            <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='LoginView.php'">
            <span class="glyphicon glyphicon-log-out"></span>Logout</button>
    </form>
      <script>
         $("#name").hide();
         $("#pass").hide();
         $("#conpass").hide();
         $("#usermail").hide();
         $("#mobile").hide();
         $("#useraddress").hide();


         var name = false;
         var mobile = false;
         var email = false;
         var password = false;
         var conpassword = false;
         var address = false;

         $("#employeeName").focusout(function(){
            check_fname();
         });
         $("#form_sname").focusout(function() {
            check_sname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border-bottom","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain only Characters");
               $("#sname_error_message").show();
               $("#form_sname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#registration_form").submit(function() {
            error_fname = false;
            error_sname = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_sname();
            check_email();
            check_password();
            check_retype_password();

            if (error_fname === false && error_sname === false && error_email === false && error_password === false && error_retype_password === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });

              
              //       var isValid = true;
              //       $("#submit").click(function(event) {
              //         //check Validation here
              //       var name           =$("#employeeName").val();
              //       var id             =$("#employeeid").val();
              //       var password       =$("#employeePassword").val();
              //       var conpassword    =$("#employeeconPassword").val();
              //       var email          =$("#employeeEmail").val();
              //       var mobile         =$("#phoneno").val();
              //       var address        =$("#address").val();
              //       if(name='' && id='' && password='' && conpassword='' && email='' && mobile='' && address='')
              //       {
              //          isValid=false;
              //       }
              //       var tag=$("#employeetag").val();
              //       $("employeeconPassword").keyup(function(){
              //         if(password==conpassword){
              //           $("")
              //         }
              //         })
              //           if (!isValid) {
              //             event.preventDefault();
              //           }                
              //       });                  
              //         });
        //       $(document).ready(function(){ 
        //         var name           = $("#employeeName").val();
        //         var id             = $("#employeeid").val();                
        //         var email          = $("#employeeEmail").val();
        //         var mobile         = $("#phoneno").val();
        //         var address        = $("#address").val(); 
        //         $("#name")               
        // function ajaxCall(){         
        //           jQuery.ajax({
        //           url: "../Controller/ajax.php",
        //           data:'empId='+id,
        //           type: "POST",
        //           success:function(data){            
                      
        //         } 
        //         function myemail(txt){
		    //            var regexp =/^[a-zA-Z0-9!,./#$%^&*|-]+@[a-zA-Z0-9]+\.([a-zA-Z0-9]+)*$/;
		    //            if(!(txt.value.match(regexp))){
		    //               swal("Enter The valid EmailID");
		    //              }
        //         }
        //         function mypass(txt){
        //           var regexp =/^([a-zA-Z0-9.@!#$%^&*()]{4,8})$/;
        //           if(!(txt.value.match(regexp))){
        //             swal("Enter the valid password\n Requ-4 to 8 characters");
        //             }
        //             else{
        //               passwordCheck();

        //             }
        //           }
        //           function passwordCheck(){
        //             var password       = $("#employeePassword").val();
        //             var conpassword    = $("#employeeconPassword").val();
        //             if(password==''){
        //               $("#pass").html('enter password')
        //             }

        //           }   
        //         })   })  
         
        
            </script> 
    </body>
</html>