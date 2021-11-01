<?php
include "../Controller/RegisterCheckerController.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register-Here!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
       
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Register-Here!</h1>

                    <p class="lead"></p>
                    

		<form action="../Controller/registerController.php" method="POST" id="contact-form"  enctype="multipart/form-data">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name">EmailID *</label>
					<input type="text" name="name" id="name" placeholder="Enter-EmailID" onBlur="myemail(form.name)" class="form-control"  required><br>
					<span id="avilabilityemail"></span>    
                    
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_lastname">Password</label>
					<input type="password" name="password1" id="password" class="form-control" placeholder="Enter-password" onBlur="mypass(form.password1)" required><br>
                    
                </div>
				<div class="form-group">
                    <label for="form_lastname">Re-Enter-Password</label>
					<input type="password" name="password2" id="password2" class="form-control" placeholder="Re-Enter-password"><br>
					<span id="avilabilitypass"></span><br>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
			<input type="submit" name="Regsubmit" class="btn btn-success btn-send" id="registrationSubmit" value="submit">
            </div>
             
        </div><br>
		<div class="row">
		<div class="col-md-6">
                <button  type="submit" class="btn btn-success btn-send"><a href="login.php"><-Go Login</a></button> 
           </div>
   				</div>
					</div>
						</form>
                </div>
            </div>
        </div>
		<script src="../CdnLinks/3.5.1jquery.min.js"></script>
		<script src="../CdnLinks/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
       
		<script>
		$(document).ready(function(){
		$("form").submit(function(){
			alert("Register Successfully!");
		});
		});



		function mailAvailability() {
			
			jQuery.ajax({
				
				url: "../Controller/LoginController.php",
				data:'name='+$("#name").val(),
				type: "POST",
				success:function(data){
					var html='';
					if(data=="success"){
						html = "<span style='color: red;' class='status-not-available'> Mailid Not Available.</span>";
						$('#submit').prop('disabled', true);
					}else{
						html = "<span style='color: green;' class='status-available'>Available</span>";					
						$('#submit').prop('disabled', false);
					}
					$("#avilabilityemail").html(html);
					
				},
				error:function (){ }
			});
		}

		

		function myemail(txt){
		var regexp =/^[a-zA-Z0-9!,./#$%^&*|-]+@[a-zA-Z0-9]+\.([a-zA-Z0-9]+)*$/;

		if(!(txt.value.match(regexp)))
		{
		swal("Enter The valid EmailID\n");
		}
		else{
			mailAvailability();
		}

		}


		function mypass(txt)
		{
			var regexp =/^([a-zA-Z0-9.@!#$%^&*()]{4,8})$/;

			 if(!(txt.value.match(regexp)))
			{

				swal("Enter the valid password\n Requ-4 to 8 characters");

			}
			else{
				passwordCheck();

			}
		}


		function passwordCheck(){

			$('#password, #password2').on('keyup', function () 
			{
			if ($('#password').val() == $('#password2').val()) 
			{
			$('#avilabilitypass').html('Password Matching').css('color', 'green');
			} 
			else 
			{
			$('#avilabilitypass').html('password Not Matching').css('color', 'red');
			}
			
		});

		}
		


		$(document).ready(function() {
		$("#submit").click(function(e) {console.log(e);
			e.preventDefault();
			if (!$("#name").val(),!$("#password1").val(),!$("#password2").val()) {
			alert("Please Fill the All fields");
			} else {
			$("#form").submit();
			}
		});
		});

	
		</script>



    </body>
</html>
