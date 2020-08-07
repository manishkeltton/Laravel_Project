<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){

    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $user_role      = $_POST['user_role'];
    $phonenumber    = $_POST['phonenumber'];
    $password       = $_POST['password'];
    $sql = "INSERT INTO users (firstname,lastname,email,user_role,phonenumber,password) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $user_role, $phonenumber, $password]);
    if($result){
        echo 'Successfully registered.';
    }else{
        echo 'There were errors while saving the data.';
    }
}else{
    echo 'No data';
}