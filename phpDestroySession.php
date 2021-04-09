<?php
session_start();
?>

<?php
// remove all session variables
session_unset();

//destroy session
session_destroy();

echo "session destroyed";
?>