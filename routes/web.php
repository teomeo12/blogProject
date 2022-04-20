<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ContactUsController;
use \App\Http\Controllers\BuyCryptoController;

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

// Route::get('/', [PagesController::class, 'index']);
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::resource('/blog', PostsController::class);
Route::resource('/about', AboutController::class);
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/buycypto', [BuyCryptoController::class, 'index'])->name('buycypto');

Route::get('/contactUs', [ContactUsController::class, 'contactUs'])->name('contactUs'); 

Route::post('/contactUs', [ContactUsController::class, 'storeContactUs'])->name('contactUsStore'); 