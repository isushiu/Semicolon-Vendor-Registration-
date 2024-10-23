<?php
session_start();

// Destroy all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login form or any other page
header("Location: ../index.php");
exit();
?>
