<?php
    try {
        $conn=mysqli_connect('localhost','root','','db_php_11');
        // echo 'success';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
