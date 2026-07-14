<?php
    include '../pages/header.php';
    session_start();
?>
    <div class="container mt-4">
        <h1>hello</h1>
        <?php 
    
        if(!isset($_SESSION['is_admin'])){
            echo '
                <a href="../auth/login.php" class="btn btn-outline-primary">Login</a>
                <a href="../auth/register.php" class="btn btn-outline-primary">Register</a>
            ';
        }else{
            echo '
                <a href="../auth/login.php" class="btn btn-outline-primary">logout</a>
            ';
        }
         ?>

       
    </div>
<?php
    include '../pages/footer.php';
?>