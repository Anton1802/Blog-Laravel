<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\Admin\LoginController;



Route::get('/', [GeneralController::class, 'getAll'])->name('home');
Route::get('/category/{idCategory}', [GeneralController::class, 'getArticlesIdCategory'])->name('home');


Route::get('/single/{idArticle}', [SingleController::class, 'getSingle'])->name('single');
Route::post('/comment', [SingleController::class, 'createComment'])->name('single');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/autho', [LoginController::class, 'index'])->name('login');
Route::post('/autho_process', [LoginController::class, 'login'])->name('login_process');
