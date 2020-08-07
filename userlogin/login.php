<?php

    session_start();

    if(isset($_SESSION['userlogin'])){
        header("Location: homepage.php");
    }

?>


<!DOCTYPE html>
<html>
<head> 
    <title>User Login  | PHP</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" text="text/css" href="css/styles.css">
</head>
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
    
                <div class="brand_logo_container">
                    <img src="img/emsimage.png" class="brand_logo" alt="Programming Knowledge logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                             <span class="input-group-text"><i class="fa fa-user"></i></span>

                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                             <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>                    
                        </div>
                                         
                    </div>
                
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="button" name="button" id="login" class="btn login_btn">Login</button>
            </div>
            </form>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="../userreg/registration.php" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script 
            src="https://code.jquery.com/jquery-3.5.1.min.js" 
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
            crossorigin="anonymous"></script>




<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $('#login').click(function(e){
            var valid = this.form.checkValidity();
            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
                     }
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username: username, password:password},
                success: function(data){
                    alert(data);
                    if($.trim(data) === "1"){
                        setTimeout(' window.location.href = "homepage.php"', 2000)
                    }
                },
                error: function(data){
                    alert('there were error while doing the operation.');  
                }
            });
            
        });

    });

</script>
</body>
</html>