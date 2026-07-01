<?php
    include 'connection.php';
    global $conn;
    if(isset($_POST['btnSubmit'])){
        if(!is_dir('images')){
            mkdir('images',0777,true);
        }
        $fileName=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $path='images/'.$fileName;
        move_uploaded_file($tmp_name,$path);
        $insert="INSERT INTO move_upload_file (file) VALUES ('$fileName')";
        $ex=mysqli_query($conn,$insert);
        if($ex){
            header('location: main.php');
        }
    }