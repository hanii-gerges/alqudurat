<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     $categories = Category::all();
    return view('welcome')->with('categories',$categories);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Product Route
Route::get('product/{product}',[ProductController::class,'show'])->name('product');

Route::view('p','AdminPanel.profile.my_profile');

Route::get('/logout',[Controller::class , 'logout'])->name('logout');

//Category Routes
Route::get('/categories',[CategoryController::class , 'index'])->name('categories');
Route::get('/categories/create',[CategoryController::class,'create'])->middleware('auth:sanctum');
Route::get('/categories/{category}',[CategoryController::class , 'show'])->name('category');
Route::get('/admin/categories',[CategoryController::class,'adminIndex'])->middleware('auth:sanctum');
Route::post('/categories',[CategoryController::class,'store'])->middleware('auth:sanctum');
Route::get('/categories/edit/{category}',[CategoryController::class,'edit'])->middleware('auth:sanctum');
Route::put('/categories/{category}',[CategoryController::class,'update'])->middleware('auth:sanctum');
Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->middleware('auth:sanctum');


//Product Routes
Route::get('/admin/products',[ProductController::class,'adminIndex'])->middleware('auth:sanctum');
Route::get('/products/create',[ProductController::class,'create'])->middleware('auth:sanctum');
Route::post('/products',[ProductController::class,'store'])->middleware('auth:sanctum');
Route::get('/products/edit/{product}',[ProductController::class,'edit'])->middleware('auth:sanctum');
Route::put('/products/{product}',[ProductController::class,'update'])->middleware('auth:sanctum');
Route::delete('/products/{product}',[ProductController::class,'destroy'])->middleware('auth:sanctum');

