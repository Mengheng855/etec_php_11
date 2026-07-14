<?php
    include '../pages/header.php';
?>
    <a href="../index.php" class="btn btn-outline-primary">back to home</a>
    <div class="container mt-4 p-5 shadow rounded-3 w-50">
        <h2 class="text-center">Login</h2>
        <form action="checkLogin.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email...">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password...">
            </div>
            <span>Don`t have an account?<a href="register.php">register</a></span>
            <button name="btnLogin" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>
<?php
    include '../pages/footer.php';
?>