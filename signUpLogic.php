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

 session_start(); 
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['pass'];

 $sql = "select * from signUp WHERE phone = '$phone' ";

 $result = $conn->query($sql);
  
  if($result -> num_rows > 0)
  {
    $_SESSION['message'] = 'phone no already registered !!';
  }

  else
  {
    $sql = "insert into signUp values ('$fname','$lname','$email','$phone','$password')";
    $conn->query($sql);
    echo "SignUp successfull !! kindly login again ";
    $_SESSION['message'] = 'SignUp successfull !! kindly login again';
  }
  header("Location: login.php");
  exit();
 ?>
