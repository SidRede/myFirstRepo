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
$email = $_GET['Username'];
$password = $_GET['Password'];

$sql = "SELECT * FROM signUp WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if a matching record is found
    if ($result->num_rows > 0) {
        echo "Login successful!";
       
        // Start or resume the session
        session_start();
         // Store a value in the session
         $_SESSION['username'] = $email;
         // Fetch the first row from the result set
          $row = mysqli_fetch_assoc($result);
          // Access the value of the user_id attribute
          $user_id = $row['user_id'];

          $_SESSION['user_id'] = $user_id;

          $_SESSION['alert'] = 1 ;


         // Retrieve the value from the session
         $loggedInUser = $_SESSION['username'];
         
               // Close the result set
          mysqli_free_result($result);

         // Output the value
         header("Location: index.php");
    }
      
         else 
         {
          $error = " <span class ='red'  style= 'color: red;' >Please enter correct E-mail id and Password</span>";
          header('location: login.php?error=' . $error);
         } 
          
    
    
    ?>