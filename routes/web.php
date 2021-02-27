<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
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
    $status = 0;
    $language_type = 'default';
    $categories = Category::all();
    return view('welcome',compact('status','language_type','categories'));
})->name('welcome');

// Language Route
//Route::get('lang/{lang}',[Controller::class ,'language'])->name('lang');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// category Routes
Route::get('categories',[CategoryController::class , 'index'])->name('categories');

Route::get('category/{category}',[CategoryController::class , 'show'])->name('category');

// Product Route
Route::get('product/{product}',[ProductController::class,'show'])->name('product');

//logout
Route::get('/logout',[Controller::class , 'logout'])->name('logout');

//message route
Route::post('send/message',[MessageController::class,'store'])->name('message.store');




