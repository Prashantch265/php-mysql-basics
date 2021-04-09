<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
    
<?php

$nameErr=""; $ageErr="";

function display($nameErr1, $ageErr1){
    echo <<<_HTML_
    <form name="form1" method="POST" action="$_SERVER[PHP_SELF]">
        Name 
        <input type="text" name="fname"/>
        <input type="text" name="mname"/>
        <input type="text" name="lname"/>
        <span class="error">* $nameErr1</span>
        <br/>
        Age 
        <input type ="number" name="age"/>
        <span class="error">* $ageErr1</span>
        <br/>
        <input type="submit" value="Submit"/>
    </form>
    _HTML_;
}

function validate(){
    global $nameErr, $ageErr;
    if(empty($_POST["fname"]) || empty($_POST["lname"])){
        $nameErr = "Name is required";
        return false;
    }else if(empty($_POST["age"])){
        $ageErr = "Age is required";
        return false;
    }
    else{
        return true;
    }
}

function process(){
    echo "Name = " . $_POST["fname"] . " " . $_POST["mname"] . " " . $_POST["lname"];
    echo "<br/>";
    echo "Age = " . $_POST["age"];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(validate()){
        process();
    }else{
        display($nameErr, $ageErr);
    }
}else{
    //$nameErr = $ageErr = "";
    display($nameErr, $ageErr);
}

// function display($err1, $err2, $emailErr, $pwdErr){
//     echo <<<_HTML_
//     <form mehtod="POST" action="$_SERVER[PHP_SELF]">
//         Name : <input type = "text" name = "alphabets"/>
//         <span class="error"> $err1 </span>
//         <br/>
//         Contact no. : <input type="tel" name = "numbers"/>
//         <span class="error"> $err2 </span>
//         <br/>
//         E-mail : <input type="email" name="email"/>
//         <span class="error"> $emailErr </span>
//         <br/>
//         Password : <input type="password" name="password"/>
//         <span class="error"> $pwdErr </span>
//         <br/><br/>
//         <input type = "submit" value = "Submit"/>
//     </form>
//     _HTML_;
// }

// function validate(){
//     global $err1, $err2, $emailErr, $pwdErr;
//     if(empty($_POST["alphabets"])){
//         $err1 = "Please Enter Your Name";
//         return false;
//     }else if(empty($_POST["numbers"])){
//         $err2 = "Please Enter Your Phone no.";
//         return false;
//     }else if(empty($_POST["email"])){
//         $emailErr = "PLease Enter Email";
//         return false;
//     }else if(empty($_POST["password"])){
//         $pwdErr = "Please Enter Password";
//         return false;  
//     }else{
//         if($_POST["password"].length < 6){
//             $pwdErr = "Password must be atleast 6 characters";
//             return false;
//         }else{
//             return true;
//         }
//     }
// }

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if(validate()){
        
//     }else{
//         display($err1, $err2, $emailErr, $pwdErr);
//     }
// }else{
//     $err1 = $err2 = $emailErr = $pwdErr = "";
//     display($err1, $err2, $emailErr, $pwdErr);
// }
?>

</body>
</html>