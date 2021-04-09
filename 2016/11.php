<?php

function display($nameErr, $checkErr){
    echo <<<_HTML_
    <form name="form1" method="POST" action="$_SERVER[PHP_SELF]">
        Name : <input type="text" name="name"/> <span> $nameErr </span>
        <br/>
        Hobbies <span> $checkErr </span>
        <br/>
         Singing <input type="checkbox" name="hobbies[]" value="Singing" />
         Dancing <input type="checkbox" name="hobbies[]" value="Dancing" />
         Drawing <input type="checkbox" name="hobbies[]" value="Drawing" />
         Reading <input type="checkbox" name="hobbies[]" value="Reading" />
        <br/>
        <br/>
        <input type="submit" value="Submit"/>
    </form>
    _HTML_;
}

function validate(){
    global $nameErr, $checkErr;
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
        return false;
    }else if(empty($_POST["hobbies"])){
        $checkErr = "Select at least one";
        return false;
    }else{
        return true;
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!validate()){
        display($nameErr, $checkErr);
    }
}else{
    $nameErr = $checkErr = "";
    display($nameErr, $checkErr);
}

?>