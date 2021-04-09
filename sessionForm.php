<?php

session_start();

echo <<<_HTML_
    <form method="post" action="<?php $_SERVER[PHP_SELF]">
        Name : <input type="text" name="username"/>
        <br/>  
        Email : <input type="email" name="email"/>
        <br/>
        <br/>
        <input type="submit" value="Submit"/>
    </form>
_HTML_;

if($_SERVER['REQUEST_METHOD'] == "POST")
$_SESSION["user"] = array(user => $_POST["username"], email => $_POST["email"]);


?>