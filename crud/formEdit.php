<?php
    include 'conn.php';
    global $conn;
    $id=$_GET['id'];
    $select="SELECT * FROM tbl_pets WHERE id=$id";
    $ex=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($ex);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-3">
    <a href="table.php" class="btn btn-primary">back to table</a>
    <div class="container mt-4 p-5 shadow rounded-3 w-50">
        <h2 class="text-center">Form</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="mb-2">
                <label for="" class="form-label">Name</label>
                <input type="text" value="<?= $row['name'] ?>" name="name" class="form-control" placeholder="name...">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Gender</label>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled >---other---</option>
                    <option value="male" <?= $row['gender']=='male'?'selected':'' ?>>Male</option>
                    <option value="female" <?= $row['gender']=='female'?'selected':''?>>Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number" value="<?= $row['age'] ?>" name="age" class="form-control" placeholder="age...">
            </div>
            <button name="btnUpdate" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>
</body>
</html>