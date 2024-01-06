<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db( $conn, 'bookbazaar' );
$uname = $_GET['Username'];
$password = $_GET['Password'];

$sql = "SELECT * FROM signUp WHERE email = '$uname' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if a matching record is found
    if ($result->num_rows > 0) {
        echo "Login successful!";
       
        // Start or resume the session
        session_start();
         // Store a value in the session
         $_SESSION['username'] = $uname;

         // Retrieve the value from the session
         $loggedInUser = $_SESSION['username'];
 
         // Output the value
         header("Location: index.php");
    }
      
         else {
            echo "Invalid username or password.";
        }
    
    
    ?>