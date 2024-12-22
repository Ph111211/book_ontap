<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Posts</title>
</head>
<body>


    <h1 style="margin: 50px 50px">Thêm sach mới</h1>
    <form action="{{ route('store') }}" method="POST" style="margin: 50px 50px">
        @csrf
        
        
        
        <div class="mb-3">
            <label for="name" class="form-label">Ten sach</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Tac gia</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Nam</label>
            <input type="text" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">So ban sao</label>
            <input type="text" class="form-control" id="quantity" name="quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

</body>