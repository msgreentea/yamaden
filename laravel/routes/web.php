<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/company', [PagesController::class, 'company'])->name('company');
Route::get('/business', [PagesController::class, 'business'])->name('business');
Route::get('/result', [PagesController::class, 'result'])->name('result');
Route::get('/recruit', [PagesController::class, 'recruit'])->name('recruit');
// 入力ページ
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('send');
Route::get('/contact/completed', [ContactController::class, 'completed'])->name('completed');
Route::get('/contact/list', [ContactController::class, 'list'])->name('list');