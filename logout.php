<?php 
    session_start();
    $_SESSION['customerlogin'] == "";
    session_unset();
    header('location: login.php');
?>