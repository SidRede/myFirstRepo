<?php

function CheckIfAdded($bookId)
{
    // session_start();
    $user_id = $_SESSION['user_id'];

    require 'conn.php';

    $sql = "select * from cart where user_id = '$user_id' and Book_id = '$bookId' and status = 2 ;";
    
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) >= 1) {
        return 1;
    }
    else{
        return 0;
    }
}