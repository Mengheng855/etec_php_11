<?php
    require 'conn.php';
    global $conn;
    if(isset($_POST['btnSave'])){
        $name=$_POST['name'];
        $position=$_POST['position'];
        $salary=$_POST['salary'];
        if(!is_dir('uploads')){
            mkdir('uploads',0777,true);
        }
        $fileName=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $path='uploads/'.time().'_'.$fileName;
        move_uploaded_file($tmp_name,$path);
        $insert="INSERT INTO tbl_employee (name,position,salary,profile) VALUES ('$name','$position','$salary','$path')";
        $ex=$conn->query($insert);
        if($ex){
            header('location: table.php');
        }
    }