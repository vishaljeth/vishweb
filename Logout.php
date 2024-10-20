<?php
session_start(); // Start the session

// Unset all of the session variables
$_SESSION = array();

// Finally, destroy the session
session_destroy();

// Redirect to the home page or another page

header("Location: index.php");
exit;
?>
