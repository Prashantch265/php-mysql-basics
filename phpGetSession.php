<?php
session_start();
?>

<?php
echo $_SESSION["user"] . "<br/> Or <br/>";
print_r($_SESSION["user"]);
?>