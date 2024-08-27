<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/user/index-jakarta', [HomeController::class, 'conjiooJakarta'])->name('user.index-jakarta');
Route::get('/user/about-us', [HomeController::class, 'aboutUs'])->name('user.about-us');
Route::get('/user/contact', [HomeController::class, 'contact'])->name('user.contact');
Route::get('/user/deluxe', [HomeController::class, 'deluxe'])->name('user.deluxe');
Route::get('/user/news', [HomeController::class, 'news'])->name('user.news');
Route::get('/user/premiere', [HomeController::class, 'premiere'])->name('user.premiere');
Route::get('/user/rooms', [HomeController::class, 'rooms'])->name('user.rooms');
Route::get('/user/services', [HomeController::class, 'services'])->name('user.services');
Route::get('/user/superior', [HomeController::class, 'superior'])->name('user.superior');