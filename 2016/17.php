<?php

session_start();

$_SESSION['user'] = "prashant";

echo $_SESSION['user'];

?>

<?php

session_unset();

session_destroy();

?>