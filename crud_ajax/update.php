<?php
    require 'conn.php';
    global $conn;
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    if($_FILES['file']['name']){
        $fileName=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $path='uploads/'.time().'_'.$fileName;
        move_uploaded_file($tmp_name,$path);
        $update="UPDATE tbl_books SET title='$title',author='$author',
        qty='$qty',price='$price',image='$path' WHERE id=$id";
    }else{
        $update="UPDATE tbl_books SET title='$title',author='$author',
        qty='$qty',price='$price' WHERE id=$id";
    }
    $ex=$conn->query($update);
    if($ex){
        echo 'success';
    }
    
    