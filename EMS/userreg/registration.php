<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  
</head>
<body style="background-color:#603abc"> 

<div>
    <?php
    
    ?>
</div>
<div>
    <form action="ree.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration</h1>
                    <hr>
                    <p>Fill the form to register.</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name </b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>
                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" id="lastname" type="text" name="lastname" required>                   
                    <label for="email"><b>Email Address</b></label>
                    <input class="form-control" id="email" type="email" name="email" required>
                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" id="phonenumber" type="number" name="phonenumber" required><br>
                    <label for="title"><b>User Role</b></label>
                    <select name="user_role" id="user_role">
                    <option value="">Select</option>
                    <option value="employee">Employee</option>
                    <option value="emoloyer">Employer</option>
                    </select><br>
                    <label for="password"><b>Password</b></label>
                    <input class="form-control" id="password" type="password" name="password" required>               
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">                   
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){
            var valid = this.form.checkValidity();
            if(valid){
            var firstname   = $('#firstname').val();
            var lastname    = $('#lastname').val();
            var email       = $('#email').val();
            var user_role   = $('#user_role').val();
            var phonenumber = $('#phonenumber').val();
            var password    = $('#password').val();
               e.preventDefault();
                $.ajax({
                    type: 'Post',
                    url: 'process.php',
                    data: {firstname: firstname, lastname :lastname , email: email, user_role: user_role, phonenumber: phonenumber, password: password},
                    success: function(data){
                    Swal.fire({
                        'title': 'Successful',
                        'text': data,
                        'type': 'Success'
                                })
                    },
                    error: function(data){
                        Swal.fire({
                        'title': 'Errors',
                        'text': 'There were errors while saving the data.',
                        'type': 'error'
                                })
                    }
                });             
            }else{                
            }           
              });          
    });
</script>
</body>
</html>

