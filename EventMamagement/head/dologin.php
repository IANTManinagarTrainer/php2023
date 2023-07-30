<?php
    $username = $_POST['username']??"guest";  // ?? denotes default value
    $password = $_POST['password']??null;
    session_start();
    include_once('../head/db.php');
    $db = new db();
    if($db->log_user($username, $password))
        header("Location: ../user/main.php");
    else{
        $_SESSION['error'] = "Invalid username or password";
        header("Location: ../public/login.php");  // redirect to login page
    }
?>