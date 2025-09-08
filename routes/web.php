<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index'])->name('index');

Route::get('/course/{id}',[PageController::class,'course'])->name('course');
Route::get('/form/{id}',[PageController::class,'form'])->name('form');
Route::post('/submission',[PageController::class,'submission'])->name('submission');
Route::view('test','form');
