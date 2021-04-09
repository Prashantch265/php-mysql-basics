<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into DB</title>
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
   include_once "dbConnect.php";
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];
   $age = $_POST['age'];
   if(mysqli_query($conn,"INSERT users(fname, mname, lname, age) Values('$fname', '$mname', '$lname', $age)")){
    $last_id = mysqli_insert_id($conn);
    echo "<br/>" . "New record created successfully. Last inserted ID is: " . $last_id;   
   }else{
    echo "<br/>" . "Error: " . mysqli_error($conn);
   }

   mysqli_close($conn);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(validate()){
        process();
    }else{
        display($nameErr, $ageErr);
    }
}else{
    display($nameErr, $ageErr);
}
?>
</body>
</html>