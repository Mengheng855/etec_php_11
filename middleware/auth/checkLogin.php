<?php
    require '../config/connection.php';
    global $conn;
    session_start();
    if(isset($_POST['btnLogin'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select="SELECT password,is_admin FROM tbl_users WHERE email='$email'";
        $ex=$conn->query($select);
        $row=mysqli_fetch_assoc($ex);
        if(password_verify($password,$row['password'])){
            $_SESSION['is_admin']=$row['is_admin'];
            if($row['is_admin']==1){
                header('location: ../admin/admin.php');
            }elseif($row['is_admin']==0){
                header('location: ../user/user.php');
            }else{
                header('location: login.php');
            }
        }
    }