<?php
    include 'conn.php';
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $name=htmlspecialchars($_POST['name']);
        $gender=htmlspecialchars($_POST['gender']);
        $age=htmlspecialchars($_POST['age']);
        $insert="INSERT INTO tbl_pets (name,gender,age) VALUES ('$name','$gender','$age')";
        $result=mysqli_query($conn,$insert);
        if($result){
            header('location: table.php');
        }
    }