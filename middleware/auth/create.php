<?php
    require '../config/connection.php';
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $create="INSERT INTO tbl_users (username,email,password)
        VALUES ('$username','$email','$password')";
        $ex=$conn->query($create);
        if($ex){
            header('location: login.php');
        }
    }