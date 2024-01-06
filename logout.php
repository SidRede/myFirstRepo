<?php
// Start or resume the session
session_start();

// Check if the logout link is clicked
// You can perform additional checks as needed

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page as needed
header("Location: landingPage.php");
exit();


?>
