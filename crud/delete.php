<?php
    include 'conn.php';
    global $conn;
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_pets WHERE id=$id";
    $ex=mysqli_query($conn,$delete);
    if($ex){
        header('location: table.php');
    }
    