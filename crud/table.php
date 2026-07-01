<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4 p-5 shadow rounded-3">
        <a href="form.php" class="btn btn-primary float-end">+add pet</a>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conn.php';
                    global $conn;
                    $select="SELECT * FROM tbl_pets";
                    $ex=mysqli_query($conn,$select);
                    while($row=mysqli_fetch_assoc($ex)){
                        echo '
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['gender'].'</td>
                                <td>'.$row['age'].'</td>
                                <td>
                                    <a href="delete.php?id='.$row['id'].'" class="btn btn-outline-danger" onclick="return confirm(\'ARE YOU SURE?\')">Delete</a>
                                    <a href="formEdit.php?id='.$row['id'].'" class="btn btn-outline-warning">Edit</a>
                                </td>
                            </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>