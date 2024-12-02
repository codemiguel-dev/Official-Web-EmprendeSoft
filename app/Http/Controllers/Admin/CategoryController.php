<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));

    }


    public function create()
    {
        return view('admin.category.add');
    }

 
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->post('name');
        $category->description = $request->post('description');
        $category->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/categoría/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $category->image = $url. $nombreimagen;
        }
        $category->save();
        return redirect()->route('Category.index')->with("success", "Agregado con exito!");
    }

   
   
    public function show(string $id)
    {
        $category  = Category::find($id);
        return view('admin.category.delete', compact('category'));
    }


    public function edit(string $id)
    {
        $category  = Category::find($id);
        return view('admin.category.update', compact('category'));
    }

   
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->name = $request->post('name');
        $category->description = $request->post('description');
        $category->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/categoría/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $category->image = $url. $nombreimagen;
        }
        $category->save();
        return redirect()->route('Category.index')->with("success", "Actualizado con exito");
    }

    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route("Category.index")->with("success", "Eliminado con exito!");
    }
}
