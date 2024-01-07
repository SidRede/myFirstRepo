<?php
    $email = $_POST['email'];
    session_start();
    $_SESSION['email'] = $email;
    header("Location: login.php");

    ?>