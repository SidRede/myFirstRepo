<?php

    session_start();
    $user_id = $_SESSION['user_id'];
    $book_id = $_GET['id'];

    require 'conn.php';
    $sql = 'delete from cart where book_id = '.$book_id.' and user_id = '.$user_id.' ;';

    $conn -> query($sql);

    header('location: Cart.php');


?>