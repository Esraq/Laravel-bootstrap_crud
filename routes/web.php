<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;



use App\Http\Controllers\ProductController;

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

Route::get('/', [SiteController::class, 'home']);


Route::get('/about_us', [SiteController::class, 'about']);


Route::get('/our_books', [SiteController::class, 'books']);


Route::get('/our_books', [SiteController::class, 'books']);

Route::get('/library', [SiteController::class, 'library']);


Route::get('/contact_us',[SiteController::class,'contact']);



Route::resource('product', ProductController::class);