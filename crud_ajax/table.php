<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <button type="button" class="btn btn-outline-primary mb-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Add Book
        </button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>C++</td>
                    <td>Bjarne Stroustrup</td>
                    <td>5</td>
                    <td>$5</td>
                    <td>
                        <img src="https://i.pinimg.com/736x/4e/55/63/4e5563f53216ec1a8e149f88473e9455.jpg" width="30px" height="30px" alt="">
                    </td>
                    <td>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                        <button class="btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></button>
                    </td>
                </tr>
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
                            <form id="form" action=""  method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Author...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">QTY</label>
                                    <input type="number" class="form-control" id="qty" name="qty" placeholder="QTY...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Price</label>
                                    <input type="number" step="0.01" id="price" class="form-control" name="price" placeholder="Price...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" id="file" class="form-control" name="file" placeholder="Price...">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button"  id="save"  data-bs-dismiss="modal" class="btn btn-primary">Save</button>
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
       
        $('#save').click(function(){
            const title=$('#title').val()
            const author=$('#author').val()
            const qty=$('#qty').val()
            const price=$('#price').val()
            const file=$('#file')[0].files[0]
           
            let formData=new FormData()
            formData.append('title',title);
            formData.append('author',author);
            formData.append('qty',qty);
            formData.append('price',price);
            formData.append('file',file);

            $.ajax({
                url:'insert.php',
                method:'POST',
                data:formData,
                contentType:false,
                processData:false,
                success:function(){
                    alert(123)
                    $('#form').trigger('reset')
                }
            })
            
        })
    })
</script>