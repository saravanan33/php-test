$(document).ready(function () {     
        $('#usercheck').hide();    
        let usernameError = true;
        $('#uname').keyup(function(){
            validateUsername();
        }); 
        
       
        $('#passcheck').hide();
        let passwordError = true;
        $('#password').keyup(function(){
            validatePassword();
        });
        
        $('#conpasscheck').hide();
        let confirmPasswordError = true;
        $('#cpassword').keyup(function (){
            validateConfirmPasswrd();
        });
        
        $('#submit').click(function () {
            validateUsername();
            validatePassword();
            validateConfirmPasswrd();
            validateEmail();
            if ((usernameError == true) && 
                (passwordError == true) && 
                (confirmPasswordError == true) && 
                (emailError == true)) {
                return true;
            } else {
                return false;
            }
        });
    });

    function validateUsername(){        
        let usernameValue = $('#uname').val();
        if (usernameValue.length == '') {
        $('#usercheck').show();
            usernameError = false;
            return false;
        } 
        else if((usernameValue.length < 3)|| 
                (usernameValue.length > 10)) {
            $('#usercheck').show();
            $('#usercheck').html("**length of username must be between 3 and 10");
            usernameError = false;
            return false;
        } 
        else {
            $('#usercheck').hide();
        }
      }
      function validatePassword(){
        
        let passwrdValue = 
            $('#password').val();
        if (passwrdValue.length == '') {
            $('#passcheck').show();
            passwordError = false;
            return false;
        } 
        if ((passwrdValue.length < 3)|| 
            (passwrdValue.length > 10)) {
            $('#passcheck').show();
            $('#passcheck').html ("**length of your password must be between 3 and 10");
            $('#passcheck').css("color", "red");
            passwordError = false;
            return false;
        } else {
            $('#passcheck').hide();
        }
    }
    function validateConfirmPasswrd(){
       
        let confirmPasswordValue = 
            $('#cpassword').val();
        let passwrdValue = 
            $('#password').val();
        if (passwrdValue != confirmPasswordValue){
            $('#conpasscheck').show();
            $('#conpasscheck').html("**Password didn't Match");
            $('#conpasscheck').css("color", "red");
            confirmPasswordError = false;
            return false;
        } else {
            $('#conpasscheck').hide();
        }
    }
    function validateEmail(){
        
        var validateEmailid=$("#email").val();
        var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
            console.log("cpass"); 
            alert("invalid mailid")
            return false;
          }else{
            return true;
          }
    }
        