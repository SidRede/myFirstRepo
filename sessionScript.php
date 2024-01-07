<?php
// Start the session
session_start();

// Assume 'user_id' is a session attribute
$user_id1 = $_SESSION['user_id'];

// Output the value of 'user_id' to the console
echo "User ID: $user_id1\n";
echo "<br>";

// Output all session variables to the console
print_r($_SESSION);
?>
