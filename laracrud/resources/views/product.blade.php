<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="text-center ">
        <h1 class="bg-primary text-light">All Product</h1>
    </div>
    <div class="container mt-4 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    {{-- looping data --}}
                      @foreach ($data as $product)
           
                         <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
    
                            @if ( $product->image != null || $product->image !="")
                                <td><img src="product/{{ $product->image }}"alt="" height="100" width="100"></td>
                            @else 
                                <td></td>
                            @endif
                            
                                
                            <td>
                                
                                <div class="d-md-flex gap-2">
                                    <div class="">
                                        <a onclick="return confirm('Apakah Anda Yakin ?');" href="{{ url('delete_product',$product->id) }}" class="btn btn-sm btn-danger"> Delete</a>
                                       </div>
                                       <div class="ml-1">
                                        <a href="{{ url('update_product',$product->id) }}" class="btn btn-sm btn-primary"> Update</a>
                                       </div>
                                       
                                    </div>
                                    
                                   
                                </div>
                               
                            </td>
                      
                        </tr>
                      @endforeach
                    
                  
                </tbody>
             
            </table>
        </div>
        
        
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>