<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
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
    // $categories = Category::all();
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// category Routes
Route::get('categories',[CategoryController::class , 'index'])->name('categories');

Route::get('category/{category}',[CategoryController::class , 'show'])->name('category');

// Product Route
Route::get('product/{product}',[ProductController::class,'show'])->name('product');


Route::get('/logout',[Controller::class , 'logout'])->name('logout');


