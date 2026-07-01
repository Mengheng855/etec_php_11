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
        <form action="insert.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name...">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Gender</label>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled selected>---other---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" placeholder="age...">
            </div>
            <button name="btnSubmit" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>
</body>
</html>