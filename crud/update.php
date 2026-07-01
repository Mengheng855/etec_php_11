<?php
    include 'conn.php';
    global $conn;
    if(isset($_POST['btnUpdate'])){
        $id=$_POST['id'];
        $name=htmlspecialchars($_POST['name']);
        $gender=htmlspecialchars($_POST['gender']);
        $age=htmlspecialchars($_POST['age']);
        $update="UPDATE tbl_pets SET name='$name',gender='$gender',age='$age' WHERE id=$id";
        $rs=$conn->query($update);
        if($rs){
            header('location: table.php');
        }
    }
?>