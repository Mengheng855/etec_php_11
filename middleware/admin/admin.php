<?php
    session_start();
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin']!=1){
        header('location: ../user/user.php');
        exit;
    }
?>
<h1>welcome to dashboard</h1>