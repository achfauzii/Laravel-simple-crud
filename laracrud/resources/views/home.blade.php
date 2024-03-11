<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Add Product</h1>
     
        <div class="container">
            <form action="{{ url('/add_product') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 ">
                    <label for="" class="form-label">Product Title</label>
                    <input class="form-control" type="text" name="title" id="title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Product Description</label>
                    <textarea class="form-control" name="description" id="" ></textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Product Image</label>
                    <input  class="form-control"type="file" name="image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <input  class="btn btn-primary" type="submit" value="Add Product">
                </div>
            </form>
        </div>
       
    </center>
    <div class="container-fluid mt-5" >
        <a href="{{ url('show_product') }}" class="btn btn-success"> Show Product</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>