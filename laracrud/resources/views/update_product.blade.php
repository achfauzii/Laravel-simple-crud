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
    <div class="text-center ">
        <h1 class="bg-primary text-light">All Product</h1>
    </div>
    <div class="container">
    <form action="{{ url('/edit_product',$product->id) }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4 ">
            <label for="" class="form-label">Product Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$product->title}}">
        </div>
        <div class="mb-4">
            <label for="" class="form-label">Product Description</label>
            <textarea class="form-control" name="description" id="">{{$product->description}}</textarea>
     
        </div>
        <div class="mb-4">
            <div class="d-flex">
                <img src="/product/{{$product->image}}" alt="" height="200" max-width="200">
            </div>
            <label for="" class="form-label">Product Image</label>
            <input  class="form-control"type="file" name="image"> 
        </div>
        <div class="">
            <input  class="btn btn-primary" type="submit" value="Update Product">
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>