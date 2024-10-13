<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    FrontendRoutesController
};

Route::get('/',[FrontendRoutesController::class,'index'])->name('frontend.home');
Route::get('/article/{slug}',[FrontendRoutesController::class,'article'])->name('articles.single');
Route::get('/about',[FrontendRoutesController::class,'about'])->name('about');
Route::get('/contact',[FrontendRoutesController::class,'contact'])->name('contact');
