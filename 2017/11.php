<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .err{
        color: red;
    }
    </style>
</head>
<body>
<?php 

$alphabets = $numbers = $email = $password = "";

function display($err1, $err2, $emailErr, $pwdErr){
    echo <<<_HTML_
    <form name="form1" method="POST" action="$_SERVER[PHP_SELF]">
        Name : <input type = "text" name = "alphabets"/>
        <span class="error"> $err1 </span>
        <br/>
        Contact no. : <input type="tel" name = "numbers"/>
        <span class="error"> $err2 </span>
        <br/>
        E-mail : <input type="email" name="email"/>
        <span class="error"> $emailErr </span>
        <br/>
        Password : <input type="password" name="password"/>
        <span class="error"> $pwdErr </span>
        <br/><br/>
        <input type = "submit" value = "Submit"/>
    </form>
    _HTML_;
}

function validate(){
    global $err1, $err2, $emailErr, $pwdErr;
    if(empty($_POST["alphabets"])){
        $err1 = "Please Enter Your Name";
        return false;
    }else if(empty($_POST["numbers"])){
        $err2 = "Please Enter Your Phone no.";
        return false;
    }else if(empty($_POST["email"])){
        $emailErr = "PLease Enter Email";
        return false;
    }else if(empty($_POST["password"])){
        $pwdErr = "Please Enter Password";
        return false;  
    }else{
        if($_POST["password"].length < 6){
            $pwdErr = "Password must be atleast 6 characters";
            return false;
        }else{
            return true;
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(validate()){
        
    }else{
        display($err1, $err2, $emailErr, $pwdErr);
    }
}else{
    $err1 = $err2 = $emailErr = $pwdErr = "";
    display($err1, $err2, $emailErr, $pwdErr);
}

?>

</body>
</html>
