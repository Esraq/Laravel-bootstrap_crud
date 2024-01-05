<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>





<div class="container">



      <center>  <h1><b>CRUD Operation Using Laravel Bootstrap<b></h1> </center>

      <br><br>

      @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Operation Completed Successfully
        </div>
@endif

      <table class="table table-bordered">
    <thead>
        
      <tr>
        <th><center><b>Image</b></center></th>
        <th><center><b>Product</b></center></th>
        <th><center><b>Price</b></center></th>
        <th width="280px"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <td><center><img src="image/{{$product->image}}" height="100px" width="100px"></center></td>
        <td><center>{{$product->name}}</center></td>
        <td><center>{{$product->price}}</center></td>
        <td colspan="2">
                   <center>
        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
     
                    
      
     <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>

</center>

          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>