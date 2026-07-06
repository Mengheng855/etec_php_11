<?php
    require 'conn.php';
    global $conn;
    if(isset($_POST['btnUpdate'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $position=$_POST['position'];
        $salary=$_POST['salary'];
        if($_FILES['file']['name']){
            $fileName=$_FILES['file']['name'];
            $tmp_name=$_FILES['file']['tmp_name'];
            $path='uploads/'.time().'_'.$fileName;
            move_uploaded_file($tmp_name,$path);
            $update="UPDATE tbl_employee SET name='$name',position='$position',salary='$salary',profile='$path' WHERE id=$id";
        }else{
            $update="UPDATE tbl_employee SET name='$name',position='$position',salary='$salary' WHERE id=$id";
        }
        $ex=$conn->query($update);
        if($ex){
            header('location: table.php');
        }
    }