<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;




Route::get('/', [GeneralController::class, 'getAll'])->name('home');
Route::get('/category/{idCategory}', [GeneralController::class, 'getArticlesIdCategory'])->name('cat');


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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_process', [LoginController::class, 'login'])->name('login_process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register_process', [RegisterController::class, 'reg'])->name('register_process');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/add', [DashboardController::class, 'add'])->name('dashboard_add')->middleware('auth');
Route::post('/dashboard/add_process', [DashboardController::class, 'add'])->name('dashboard_add_process')->middleware('auth');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard/del/{id}', [DashboardController::class, 'del'])->name('dashboard_del');
    Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard_edit');
    Route::get('/dashboard/ready/{id}', [DashboardController::class, 'ready'])->name('dashboard_ready');
    Route::get('/dashboard/recommend/{id}', [DashboardController::class, 'rec'])->name('dashboard_recommend');
    });
