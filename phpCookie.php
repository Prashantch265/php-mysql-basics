<?php
$cookie_name = "user";
$cookie_value = "authtoken";
setcookie($cookie_name, $cookie_value, time() + 90000, "/");

if(!isset($_COOKIE["user"]))
    echo "cookie is not set";
    else
    echo "cookie is set";

?>