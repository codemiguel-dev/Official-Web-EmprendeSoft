<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;



class ProductController extends Controller
{
   
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->price = $request->post('price');
        $product->status = $request->post('status') == true ? '1':'0';
        $product->category_id = $request->post('category_id');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/product/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $product->image = $url. $nombreimagen;
        }
        $product->save();
       
        return redirect()->route('Product.index')->with("success", "Agregado con exito!");
    }

    public function show(string $id)
    {
        $product  = Product::find($id);
        return view('admin.product.delete', compact('product'));
    }

    public function edit(string $id)
    {
        $product  = Product::find($id);
        $category = Category::all();
        return view('admin.product.update', compact('category','product'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->category_id = $request->post('category_id');
        $product->name = $request->post('name');
        $product->description = $request->post('description');
        $product->price = $request->post('price');
        $product->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/product/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $product->image = $url. $nombreimagen;
        }
        $product->save();
        return redirect()->route('Product.index')->with("success", "Actualizado con exito");
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route("Product.index")->with("success", "Eliminado con exito!");
    }
}
