<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product Details</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .transition-all {
      transition: all 0.3s ease-in-out;
    }
    .bg-navy {
      background-color: #001f3f;
    }
    .hover-bg-navy:hover {
      background-color: #001233;
    }
  </style>
</head>
<body class="bg-navy flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-pink-600">Update Product Details</h1>
    <form method="POST" action="{{ route('update', $products->id) }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <input type="text" name="name" value="{{ $products->name }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="number" name="price" value="{{ $products->price }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="number" name="quantity" value="{{ $products->quantity }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="file" name="image" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all">
        <img src="{{ asset('Images/'. $products->image) }}" width="100px" height="100px" alt="" class="mt-4">
      </div>
      <div class="mb-4">
        <input type="text" name="discription" value="{{ $products->discription }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all">
      </div>
      <div class="text-center">
        <input type="submit" value="Update Data" class="bg-pink-600 text-white py-2 px-4 rounded-lg hover:bg-pink-700 transition-all cursor-pointer">
      </div>
    </form>
  </div>
</body>
</html>
