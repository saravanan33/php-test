<!DOCTYPE html> 
<head>
    <title>
        EMPLOYEE VIEW 
    </title>
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
      </head>
    <body class="container">
      <h3>CREATE EMPLOYEE PROFILE</h3><br>
        <form name="myform" id="myform" method="POST"  >
          <div class="row">   
              <div class="col-25">
                 <label for="employeeName" >EMPLOYEE NAME:</label>
              </div>
              <div class="col-75">
                <input type="text" id="employeeName" name="emp_name"  > <br>
                <span id="name" style="color:red;font-weight:bold"></span>
              </div> 
          </div><br> 
          <div class="row">
              <div class="col-25">
                  <label for="employeeEmail" >EMPLOYEE code:</label>
              </div>
              <div class="col-75">
                  <input type="text" id="empcode" name="empcode" ><br>
                  <span id="code " style="color:red;font-weight:bold"></span>
              </div>
            </div> <br>         
            <div class="row">
              <div class="col-25">
                  <label for="employeePassword" >EMPLOYEE password:</label>
              </div>
              <div class="col-75">
              <div class="col-75">
                  <input type="password" id="employeePassword" name="emp_password"  ><br></div>
                  <span id="pass" style="color:red;font-weight:bold"></span>
              </div> 
          </div><br>  
            <div class="row">
              <div class="col-25">
                  <label for="employeeconPassword" >EMPLOYEE confirm password:</label>
              </div>
              <div class="col-75">
              <div class="col-75">
                  <input type="password" id="employeeconPassword"  name="emp_cPassword" ><br></div>
                  <span id="conpass" style="color:red;font-weight:bold"></span>
              </div>
            </div>  <br>
            <div class="row">
              <div class="col-25">
                  <label for="employeeEmail" >EMPLOYEE EMAIL:</label>
              </div>
              <div class="col-75">
                  <input type="text" id="employeeEmail" name="emp_email"  ><br>
                  <span id="usermail" style="color:red;font-weight:bold"></span>
                </div>
            </div> <br>
            <div class="row">
              <div class="col-25">
                  <label for="employeeEmail" >EMPLOYEE phone number:</label>
              </div>
              <div class="col-75">
                  <input type="text" id="phoneno" name="emp_mobile" ><br>
                  <span id="mobile" style="color:red;font-weight:bold"></span>
              </div>
            </div> <br>
            
            <div class="row">
              <div class="col-25">
                  <label for="employeeEmail" >EMPLOYEE address:</label>
              </div>
              <div class="col-75">
                  <input type="text" id="address" name="emp_address" ><br>
                  <span id="useraddress" style="color:red;font-weight:bold"></span>
              </div>
            </div> <br>
            <div class="row">
              <div class="col-25">
                  <label for="employeetag" >EMPLOYEE tag:</label>
              </div>
              <div class="col-75">
                <select id="employeetag" name="emp_tag" >
                  <option value="A">A</option>
                  <option value="E">E</option>
              </select>
              </div>
            </div> <br>
            
            <input type="submit" name="insert" id="submit" > <span id="end"></span>
            <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='SessionDestory.php'">
            <span class="glyphicon glyphicon-log-out"></span>Logout</button>
    </form>
    <script>
      
  </script>
    </body>
</html>
<!-- <script type="text/javascript">
    
    $(document).ready(function(){

    
      $(function() {
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
            check_name();
         });
         $("#employeeEmail").focusout(function() {
            check_email();
         });
         $("#phoneno").focusout(function() {
            check_phone();
         });
         $("#employeePassword").focusout(function() {
            check_password();
         });
         $("#employeeconPassword").focusout(function() {
            check_conpassword();
         });
         // $("#address").focusout(function() {
         //    check_address();
         // });

         function check_name() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#employeeName").val();
            if (pattern.test(fname) && fname !== '') {
               $("#name").hide();
               $("#employeeName").css("border-bottom","2px solid #34F458");
            } else {
               $("#name").html("Should contain only Characters");
               $("#name").show();
               $("#employeeName").css("border-bottom","2px solid #F90A0A");
               error_name = true;
            }
         }
         function check_phone() {
            var pattern = /^[0-9]*$/;
            var mobile = $("#phoneno").val();
            if (pattern.test(mobile) && mobile !== '') {
               if(mobile.length == 10){
                  $("#mobile").hide();
               $("#phoneno").css("border-bottom","2px solid #34F458");
               }
               else{
                  $("#mobile").html("Should contain 10 numbers");
                  $("#mobile").show();
                  $("#phoneno").css("border-bottom","2px solid #F90A0A");
                  }
                  } 
            else {
               $("#mobile").html("Should contain only numbers");
               $("#mobile").show();
               $("#phoneno").css("border-bottom","2px solid #F90A0A");
               error_mobile = true;
            }
         }

         // function check_sname() {
         //    var pattern = /^[a-zA-Z]*$/;
         //    var sname = $("#form_sname").val()
         //    if (pattern.test(sname) && sname !== '') {
         //       $("#sname_error_message").hide();
         //       $("#form_sname").css("border-bottom","2px solid #34F458");
         //    } else {
         //       $("#sname_error_message").html("Should contain only Characters");
         //       $("#sname_error_message").show();
         //       $("#form_sname").css("border-bottom","2px solid #F90A0A");
         //       error_fname = true;
         //    }
         // }

         function check_password() {
            var password_length = $("#employeePassword").val().length;
            if (password_length < 5) {
               $("#pass").html("Atleast 5 Characters");
               $("#pass").show();
               $("#employeePassword").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#pass").hide();
               $("#employeePassword").css("border-bottom","2px solid #34F458");
            }
         }

         function check_conpassword() {
            var password = $("#employeePassword").val();
            var retype_password = $("#employeeconPassword").val();
            if (password !== retype_password) {
               $("#conpass").html("Passwords Did not Matched");
               $("#conpass").show();
               $("#employeeconPassword").css("border-bottom","2px solid #F90A0A");
               error_conpassword = true;
            } else {
               $("#conpass").hide();
               $("#employeeconPassword").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#employeeEmail").val();
            if (pattern.test(email) && email !== '') {
               $("#usermail").hide();
               $("#employeeEmail").css("border-bottom","2px solid #34F458");
            } else {
               $("#usermail").html("Invalid Email");
               $("#usermail").show();
               $("#employeeEmail").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#myform").submit(function() {
            
            error_name = false;
            error_mobile = false;
            error_email = false;
            error_password = false;
            error_conpassword = false;

            check_name();
            check_phone();
            check_email();
            check_password();
            check_conpassword();

            if (error_name === false && error_mobile === false && error_email === false && error_password === false && error_conpassword === false) {
               console.log('if');
               // alert("Registration Successfull");
               // return true;
            } else {console.log('else');
               // alert("Please Fill the form Correctly");
               // return false;
            }


         });
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
         
        
            </script>  -->