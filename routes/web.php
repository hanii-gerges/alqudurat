<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CKEditorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::view('services','site.services');

Route::view('p','AdminPanel.profile.my_profile');

Route::get('/logout',[Controller::class , 'logout'])->name('logout');

//Category Routes
Route::get('/admin/categories',[CategoryController::class,'adminIndex']);
Route::get('/categories/create',[CategoryController::class,'create']);
Route::post('/categories',[CategoryController::class,'store']);
Route::get('/categories/edit/{category}',[CategoryController::class,'edit']);
Route::put('/categories/{category}',[CategoryController::class,'update']);
Route::delete('/categories/{category}',[CategoryController::class,'destroy']);


//Product Routes
Route::get('/admin/products',[ProductController::class,'adminIndex']);
Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products',[ProductController::class,'store']);
Route::get('/products/edit/{product}',[ProductController::class,'edit']);
Route::put('/products/{product}',[ProductController::class,'update']);
Route::delete('/products/{product}',[ProductController::class,'destroy']);
