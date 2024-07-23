<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Fetch Data</h1>
<table class="table" border="2">
    <thead>
<tr>
    <th>ID</th>
    <th>PRODUCT NAME</th>
    <th>PRODUCT PRICE</th>
    <th>PRODUCT QUANTITY</th>
    <th>PRODUCT IMAGE</th>
    <th>PRODUCT DISCRIPTION</th>
    <th colspan="2">ACTION</th>
</tr>
</thead>
<tbody>
@foreach ($product as $row)
<tr>
    <th>{{ $row->id }}</th>
    <th>{{ $row->name }}</th>
    <th>{{ $row->price }}</th>
    <th>{{ $row->quantity }}</th>
    <th><img src="{{ asset('Images/' . $row->image ) }}" width="100px" height="100px" style="border-radius: 50%" alt=""></th>
    <th>{{ $row->discription }}</th>
    <th>
        <a href="{{ route('edit',$row->id) }}" class="btn btn-success">UPDATE</a>
        <a href="{{ route('delete',$row->id) }}" class="btn btn-danger">DELETE</a>
    </th>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
