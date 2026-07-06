<?php
    require 'conn.php';
    global $conn;
    $title=$_POST['title'];
    $author=$_POST['author'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    if(!is_dir('uploads')){
        mkdir('uploads',0777,true);
    }
    $fileName=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='uploads/'.time().'_'.$fileName;
    $insert="INSERT INTO tbl_books (title,author,qty,price,image) VALUES ('$title','$author','$qty','$price','$path')";
    $ex=$conn->query($insert);
    