<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;


Route::get('/', [GeneralController::class, 'getAll'])->name('home');
Route::get('/category/{idCategory}', [GeneralController::class, 'getArticlesIdCategory'])->name('home');


Route::get('/single', function () {
    return view('single');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('404');
});
