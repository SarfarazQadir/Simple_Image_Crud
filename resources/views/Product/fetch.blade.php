<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .bg-navy {
      background-color: #001f3f;
    }
    .text-pink {
      color: #ff69b4;
    }
    .border-pink {
      border-color: #ff69b4;
    }
    .hover-bg-navy:hover {
      background-color: #001233;
    }
  </style>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
  <div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6 text-center text-pink">Fetch Data</h1>
    <table class="min-w-full bg-white border border-pink rounded-lg shadow-md">
      <thead>
        <tr class="bg-pink-500 text-white">
          <th class="py-2 px-4 border-b border-pink">ID</th>
          <th class="py-2 px-4 border-b border-pink">PRODUCT NAME</th>
          <th class="py-2 px-4 border-b border-pink">PRODUCT PRICE</th>
          <th class="py-2 px-4 border-b border-pink">PRODUCT QUANTITY</th>
          <th class="py-2 px-4 border-b border-pink">PRODUCT IMAGE</th>
          <th class="py-2 px-4 border-b border-pink">PRODUCT DESCRIPTION</th>
          <th class="py-2 px-4 border-b border-pink" colspan="2">ACTION</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($product as $row)
        <tr>
          <td class="py-2 px-4 border-b border-pink">{{ $row->id }}</td>
          <td class="py-2 px-4 border-b border-pink">{{ $row->name }}</td>
          <td class="py-2 px-4 border-b border-pink">{{ $row->price }}</td>
          <td class="py-2 px-4 border-b border-pink">{{ $row->quantity }}</td>
          <td class="py-2 px-4 border-b border-pink">
            <img src="{{ asset('Images/' . $row->image ) }}" width="100px" height="100px" class="rounded-full" alt="">
          </td>
          <td class="py-2 px-4 border-b border-pink">{{ $row->discription }}</td>
          <td class="py-2 px-4 border-b border-pink">
            <a href="{{ route('edit', $row->id) }}" class="bg-green-500 text-white py-1 px-3 rounded-lg hover:bg-green-700 transition-all">UPDATE</a>
            <a href="{{ route('delete', $row->id) }}" class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-700 transition-all">DELETE</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
