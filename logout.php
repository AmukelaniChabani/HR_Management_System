
<?php 
// logout.php//
session_start();
// Unset all session variables and destroy the session//
session_unset();
// Destroy the session//
session_destroy();
// Redirect to the index page//
header("Location: index.php");
// Exit the script to ensure no further code is executed//
exit();
?>