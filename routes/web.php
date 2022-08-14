<?php

use App\Http\Controllers\MemoController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

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

Route::view('/','home')->name('home');

Route::get('/memos',[MemoController::class,'index'])->name('memo.index');
Route::post('/memos',[MemoController::class,'store'])->name('memo.store');

Route::get('/feedbacks',[FeedbackController::class,'index'])->name('feedback.index');
Route::post('/feedbacks',[FeedbackController::class,'store'])->name('feedback.store');
