<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
use App\Models\Category;
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
    return view('welcome',compact('categories'));
})->name('welcome');

Route::get('/about', function(){
    $categories = Category::all();
    return view('about',compact('categories'));
});

Route::get('/contact', function(){
    $categories = Category::all();
    return view('contact',compact('categories'));
});
// Language Route
//Route::get('lang/{lang}',[Controller::class ,'language'])->name('lang');



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

//message route
Route::get('/messages',[MessageController::class,'index'])->middleware('auth:sanctum');
Route::get('/messages/{message}',[MessageController::class,'show'])->middleware('auth:sanctum');
Route::post('/send/message',[MessageController::class,'store'])->name('message.store');
Route::delete('/messages/{message}',[MessageController::class,'destroy'])->middleware('auth:sanctum');




