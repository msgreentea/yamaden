<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'Index']);
Route::get('/company', [PagesController::class, 'Company']);
Route::get('/business', [PagesController::class, 'Business']);
Route::get('/result', [PagesController::class, 'Result']);
Route::get('/recruit', [PagesController::class, 'Recruit']);
// 入力ページ
Route::get('/contact', [PagesController::class, 'Contact'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'Confirm'])->name('confirm');
Route::post('/contact/send', [ContactController::class, 'Send'])->name('send');