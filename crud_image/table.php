<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container mt-4 p-5 shadow rounded-3">
        <!-- Button trigger modal -->
        <button id="add" type="button" class="btn btn-outline-dark float-end mb-2" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            +ADD EMPLOYEE
        </button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require 'conn.php';
                    global $conn;
                    $select="SELECT * FROM tbl_employee";
                    $ex=$conn->query($select);
                    while($row=mysqli_fetch_assoc($ex)){
                        echo '
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['position'].'</td>
                                <td>$'.$row['salary'].'</td>
                                <td>
                                    <img src="'.$row['profile'].'" width="30px"
                                        height="30px" alt="">
                                </td>
                                <td>
                                    <a href="delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure?\')"  class="btn btn-outline-danger">Delete</a>
                                    <button id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-warning">Edit</button>
                                </td>
                            </tr>
                        
                        ';
                    }
                 ?>
            </tbody>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insert.php" method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name...">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Position</label>
                                    <select name="position" id="position" class="form-select">
                                        <option value="" disabled selected>--- Select Position ---</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="HR">HR</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Salary</label>
                                    <input type="number" id="salary" name="salary" step="0.01" class="form-control" placeholder="Salary...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Profile</label>
                                    <input id="file" type="file" name="file"  class="form-control"> <br>
                                    <img id="image" src="https://i.pinimg.com/736x/f5/47/d8/f547d800625af9056d62efe8969aeea0.jpg" width="100px" height="100px" class="rounded-circle" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="save" name="btnSave" class="btn btn-primary">Save</button>
                                    <button type="submit" id="update" name="btnSave" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function(){
        $('#file').hide()
        $('#image').click(function(){
            $('#file').click()
        })
        $('#file').change(function(){
            const file=this.files[0]
            if(file){
                const image=URL.createObjectURL(file)
                $('#image').attr('src',image)
            }
        })
        $('#add').click(function(){
            $('#exampleModalLabel').text('Add Employee')
            $('#save').show()
            $('#update').hide()
        })
        $(document).on('click','#edit',function(){
            $('#exampleModalLabel').text('Update Employee')
            $('#save').hide()
            $('#update').show()
            const row=$(this).closest('tr')
            const id=row.find('td:eq(0)').text().trim()
            const name=row.find('td:eq(1)').text().trim()
            const position=row.find('td:eq(2)').text().trim()
            const salary=row.find('td:eq(3)').text().trim().split('$').pop()
            const profile=row.find('td:eq(4) img').attr('src')
            console.log(salary);
            
            $('#name').val(name)
            $('#position').val(position)
            $('#salary').val(salary)
            $('#image').attr('src',profile)
        })
    })
</script>