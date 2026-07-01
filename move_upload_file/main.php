<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5 mt-4 shadow rounded-3 w-25">
        <form action="move_upload_file.php" method="post" enctype="multipart/form-data">
            <label for="" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            <button name="btnSubmit" class="btn btn-success mt-3">Submit</button>
        </form>
    </div>
</body>
</html>