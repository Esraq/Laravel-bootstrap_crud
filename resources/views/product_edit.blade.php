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

      <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

     Product Name:<input type="text" name="name" value="{{$product->name}}"> 
     @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
     
     <br> <br>
     
     Product Price:<input type="text" name="price" value="{{$product->price}}"> <br> <br>
     @if ($errors->first('price'))<div class="alert alert-danger">{!! $errors->first('price') !!}</div> @endif
     Enter Image:<input type="file" name="image"> 
     
     @if ($errors->first('image'))<div class="alert alert-danger">{!! $errors->first('image') !!}</div> @endif
     
     <br> 
     <img src="{{ asset('image/' . $product->image) }}" alt="" height="90px" width="120">
      <br> <br>
     <input type="submit">







</form>
</div>

</body>
</html>