<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagename = time() .'.'. $request->image->extension();
        $request->image->move(public_path("Images/"),$imagename);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $imagename;
        $product->discription = $request->discription;
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::all();
        return view('Product.fetch', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $products = Product::find($id);
        return view('Product.update', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $product = Product::find($id);
if(isset($request->image)){
    $imagename = time().'.'. $request->image->extension();
    $request->image->move(public_path('Images/'),$imagename);
    $product->image = $imagename;
}
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discription = $request->discription;
        $product->save();
        return redirect()->route('show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product ,$id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}
