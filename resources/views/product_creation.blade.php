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

  <form method="post" action="/product"  enctype="multipart/form-data">

    @csrf

     Product Name:<input type="text" name="name" placeholder="Enter Product Name"> 
     @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
     
     <br> <br>
     
     Product Price:<input type="text" name="price" placeholder="Enter Product price"> <br> <br>
     @if ($errors->first('price'))<div class="alert alert-danger">{!! $errors->first('price') !!}</div> @endif
     Enter Image:<input type="file" name="image"> 
     
    
     
     <br> 
 
     <input type="submit">







</form>
</div>

</body>
</html>