<?php 
    session_start(); 
    if(!isset($_SESSION["username"])) 
        header("Location: ../public/login.php");
?>

<form action="../head/logout.php">
    <input type="submit" value="Logout">
</form>

<a href="../head/logout.php">Log Out</a>