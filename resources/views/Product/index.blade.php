<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .transition-all {
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Product Details</h1>
    <form action="{{ route('add') }}" enctype="multipart/form-data" method="post">
      @csrf
      <div class="mb-4">
        <input type="text" name="name" placeholder="Enter Product Name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="number" name="price" placeholder="Enter Product Price" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="number" name="quantity" placeholder="Enter Product Quantity" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="file" name="image" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
      </div>
      <div class="mb-4">
        <input type="text" name="discription" placeholder="Enter Product Description" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
      </div>
      <div class="text-center">
        <input type="submit" value="Add Data" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-all cursor-pointer">
      </div>
    </form>
  </div>
</body>
</html>
