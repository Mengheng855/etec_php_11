<?php
    require 'conn.php';
    global $conn;
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_employee WHERE id=$id";
    $rs=$conn->query($delete);
    if($rs){
        header('location: table.php');
    }
