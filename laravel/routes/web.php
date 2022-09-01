<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;


Route::get('/direct', [PagesController::class, 'direct']);
Route::get('/sub', [PagesController::class, 'sub']);

Route::get('/', [PagesController::class, 'index']);
Route::get('/company', [PagesController::class, 'company']);
Route::get('/business', [PagesController::class, 'business']);
Route::get('/result', [PagesController::class, 'result']);
Route::get('/recruit', [PagesController::class, 'recruit']);


// 入力ページ
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/completed', [ContactController::class, 'completed'])->name('contact.completed');
Route::get('/contact/list', [ContactController::class, 'list'])->name('contact.list');