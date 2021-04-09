<?php

function display($emailErr, $pwdErr){
    echo <<<form
    <form method = "POST" action ="$_SERVER[PHP_SELF]" name="login">
        Email <input type="email" name="email"/>
        <span> <?php $emailErr ?> </span>
        <br /><br/>
        Password <input type="pwd" name="password"/>
        <span> <?php $passwordErr ?> </span>
        <br/> <br/>
        <input type="submit" value="Login"/>
        <br/>
        <span> <?php $error ?> </span>
    </form>
    form;
}

function validate(){
    global $emailErr, $pwdErr;
    if(empty($_POST['email'])){
        $emailErr = "PLease Enter Email";
        return false;
    }else if(empty($_POST['password'])){
        $pwdErr = "Please Enter Password";
        return false;
    }else{
        return true;
    }
}

function process(){
    global $error;

    $conn = mysqli_connect("localhost", "root", "", "users") or die("Unable to connect");

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $SQL = "SELECT * FROM users WHERE email = $email AND password = $pwd";

    if(!mysqli_query($conn, $SQL)){
        $error = "Invalid User";
        return $error;
    }else{
        echo "Login Successfully";
        mysqli_close($conn);
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(validate()){
        process();
    }else{
        display($emailErr, $pwdErr);
    }
}else{
    $emailErr = $pwdErr = "";
    display($emailErr, $pwdErr);
}

?>

