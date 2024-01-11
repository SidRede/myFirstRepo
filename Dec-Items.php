<?php

    session_start();
    $user_id = $_SESSION['user_id'];
     
    $book_id = $_GET['id'];

    require 'conn.php';

   $sql = 'select quantity from cart where book_id = '.$book_id.' and user_id = '.$user_id.';';

   $result = $conn -> query($sql);

//    $no = intval ($result);

    $no = 0;
 
    $row = $result->fetch_assoc();
     
    $no = (int)$row['quantity'];
    
    
       

    // echo '<p>'.$no.'</p>' ;
    if($no >= 2)
    {
        $sql = 'update cart set quantity = quantity - 1 where book_id = '.$book_id.' and user_id = '.$user_id.';';
    }

    else{
        $sql = 'Delete from cart where book_id = '.$book_id.' and user_id = '.$user_id.';';
    }
  
    $conn->query($sql);

     header ( 'location: Cart.php');



?>