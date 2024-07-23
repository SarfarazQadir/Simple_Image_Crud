<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Update Product Details</h1>
<form method="POST" action="{{ route('update', $products->id) }}" enctype="multipart/form-data" >
    @csrf
    <input type="text" name="name" value="{{ $products->name }}"><br><br>
    <input type="number" name="price" value="{{ $products->price }}"><br><br>
    <input type="number" name="quantity" value="{{ $products->quantity }}"><br><br>
    <input type="file" name="image" value="{{ $products->image }}" >
    <img src="{{ asset('Images/'. $products->image) }}" width="100px" height="100px" alt=""><br><br>
    <input type="text" name="discription" value="{{ $products->discription }}"><br><br>
    <input type="submit" value="Update Data">
    </form>
    </body>
</html>
