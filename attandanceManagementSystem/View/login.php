<!DOCTYPE html>
<head>
    <title>
        LOGIN
    </title>
        <!-- <script src="ajax.js"></script>
        <script src="cdnjs"></script>
        <script src="maxcdn.js"></script> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key"><i class="fa fa-key" aria-hidden="true"></i></div>
                <div class="col-lg-12 login-title">ADMIN PANEL</div>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form id="formData" method="post" action="../Controller/UserController.php">                          
                            <div class="form-group">
                                <label class="form-control-label">USER CODE</label>
                                <input type="text" id="usercode" name="usercode" class="form-control" >
                                <span id="userid" class="userId" style="color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <span id="passwordId" style="color:red;"></span>
                            </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit"  name="login" id="login"  class="btn btn-outline-primary">LOGIN</button>
                                </div><span id="button" style="color:red;"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
   <script>
       
       </script>
</body>
</html>





