<?php
    require 'conn.php';
    global $conn;
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_books WHERE id=$id";
    $ex=$conn->query($delete);
    if($ex){
        echo 'success';
    }