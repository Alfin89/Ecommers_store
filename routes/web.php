<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\Productontroller;
use App\Http\Controllers\Front\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('/categorys', [FrontController::class, 'category']);
Route::get('/view-category/{slug}', [FrontController::class, 'view']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [FrontendController::class, 'index']); 
    // category
    Route::get('/category', [CategoryController::class, 'index']); 
    Route::get('/add-category', [CategoryController::class, 'add']); 
    Route::post('/insert-category', [CategoryController::class, 'insert']); 
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']); 
    Route::put('/update-category/{id}', [CategoryController::class, 'update']); 
    Route::delete('/delete-category/{id}', [CategoryController::class, 'destroy']); 
    // products
    Route::get('/product', [Productontroller::class, 'index']); 
    Route::get('/add-product', [Productontroller::class, 'add']); 
    Route::post('/insert-product', [Productontroller::class, 'insert']);
    Route::get('/edit-product/{id}', [Productontroller::class, 'edit']); 
    Route::put('/update-product/{id}', [Productontroller::class, 'update']); 
    Route::delete('/delete-product/{id}', [Productontroller::class, 'destroy']); 
 });
