<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'getIndex']);
Route::get('/company', [PagesController::class, 'getCompany']);
Route::get('/business', [PagesController::class, 'getBusiness']);
Route::get('/result', [PagesController::class, 'getResult']);
Route::get('/recruit', [PagesController::class, 'getRecruit']);
// 入力ページ
Route::get('/contact', [PagesController::class, 'getContact']);