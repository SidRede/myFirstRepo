<?php
    session_start();
    $user = $_SESSION['user_id'];
    $book_id = $_GET['id'];

    require 'conn.php';

    $sql = "insert into cart(user_id, book_id, status,quantity) values ('$user','$book_id',2,1);";

    $conn -> query($sql);

    // echo $user;
    header('location: index.php');

?>

    