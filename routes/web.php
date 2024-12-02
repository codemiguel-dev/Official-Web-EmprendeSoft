<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;


//Agregar esta línea para redireccionar al momento de solo ingresar /Mi_blog
Route::get('/Emprendesoft', function () {
    return redirect('/Emprendesoft/public');
});


Route::get('/', function () {
      // Obtén solo las categorías con status '1'
      $categories = Category::where('status', '1')->get();
    
      // Pasa los datos a la vista como un array asociativo
      return view('welcome', ['categories' => $categories]);
})->name('welcome');

Route::get('/category-client', function () {
    $categories = Category::where('status', '1')->get();
    return view('category.index', compact('categories'));
})->name('Category.client.index');

Route::get('/category/{id}', function ($id) {
    $categories = Category::where('status', '1')->get();
    $category = Category::findOrFail($id);
    $products = $category->products;

    return view('category.product', compact('category', 'products','categories'));
})->name('category.products');

Route::get('dashboard', [DashboardController::class, 'clientDashboard'])
    ->middleware(['auth', 'verified', 'client'])
    ->name('client');

Route::get('seller', [DashboardController::class, 'sellerDashboard'])
    ->middleware(['auth', 'verified', 'seller'])
    ->name('seller');

Route::get('admin', [DashboardController::class, 'adminDashboard'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');


Route::put('updateconfiguration-user-theme/{id}',[ProfileController::class, 'updatetheme'])->name('Update.Theme');

Route::put('updateconfiguration-user-password/{id}',[ProfileController::class, 'updatepassword'])->name('Update.Password');

Route::put('updateconfiguration-user-information/{id}',[ProfileController::class, 'updateinformation'])->name('Update.Information');

//Category

Route::get('category', [CategoryController::class, 'index'])
->middleware(['auth', 'verified','admin'])
->name('Category.index');

Route::get('create-category', [CategoryController::class, 'create'])
->middleware(['auth', 'verified','admin'])
->name('Category.create');

Route::post('store-category', [CategoryController::class, 'store'])
->middleware(['auth', 'verified','admin'])
->name('Category.store');

Route::get('edit-category/{id}',[CategoryController::class, 'edit'])
->middleware(['auth', 'verified','admin'])
->name('Category.edit');
    
Route::put('update-category/{id}',[CategoryController::class, 'update'])
->middleware(['auth', 'verified','admin'])
->name('Category.update');
    
Route::get('show-category/{id}',[CategoryController::class, 'show'])
->middleware(['auth', 'verified','admin'])
->name('Category.show');
    
Route::delete('destroy-category/{id}',[CategoryController::class, 'destroy'])
->middleware(['auth', 'verified','admin'])
->name('Category.destroy');

//fin category

//Product

Route::get('product', [ProductController::class, 'index'])
->middleware(['auth', 'verified','admin'])
->name('Product.index');

Route::get('create-product', [ProductController::class, 'create'])
->middleware(['auth', 'verified','admin'])
->name('Product.create');

Route::post('store-product', [ProductController::class, 'store'])
->middleware(['auth', 'verified','admin'])
->name('Product.store');

Route::get('edit-product/{id}',[ProductController::class, 'edit'])
->middleware(['auth', 'verified','admin'])
->name('Product.edit');
    
Route::put('update-product/{id}',[ProductController::class, 'update'])
->middleware(['auth', 'verified','admin'])
->name('Product.update');
    
Route::get('show-product/{id}',[ProductController::class, 'show'])
->middleware(['auth', 'verified','admin'])
->name('Product.show');
    
Route::delete('destroy-product/{id}',[ProductController::class, 'destroy'])
->middleware(['auth', 'verified','admin'])
->name('Product.destroy');

//fin product

//User

Route::get('user', [UserController::class, 'index'])
->middleware(['auth', 'verified','admin'])
->name('User.index');

Route::get('create-user', [UserController::class, 'create'])
->middleware(['auth', 'verified','admin'])
->name('User.create');

Route::post('store-user', [UserController::class, 'store'])
->middleware(['auth', 'verified','admin'])
->name('User.store');

Route::get('edit-user/{id}',[UserController::class, 'edit'])
->middleware(['auth', 'verified','admin'])
->name('User.edit');
    
Route::put('update-user/{id}',[UserController::class, 'update'])
->middleware(['auth', 'verified','admin'])
->name('User.update');
    
Route::get('show-user/{id}',[UserController::class, 'show'])
->middleware(['auth', 'verified','admin'])
->name('User.show');
    
Route::delete('destroy-user/{id}',[UserController::class, 'destroy'])
->middleware(['auth', 'verified','admin'])
->name('User.destroy');

//fin user

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'clientDashboard'])
    ->middleware(['auth', 'verified', 'client'])
    ->name('client');
});
