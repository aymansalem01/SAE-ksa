<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index'])->name('index');


Route::post('submission',[PageController::class,'submission'])->name('submission');
// Route::view('test','test')->name('test');
Route::get('ar',[PageController::class,'arabic'])->name('ar');
Route::get('english', [PageController::class, 'english'])->name('english');
