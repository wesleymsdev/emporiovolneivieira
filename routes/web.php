<?php

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

//Rotas de paginas sem autenticação (web)
Route::get('/consulting', function () {
    return view('consulting');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/', function () {
    return view('index');
});

// Rotas Admin
Route::get('/admin/catalog', function () {
    return view('admin/catalog');
});

Route::get('/admin/categories', function () {
    return view('admin/categories');
});

Route::get('/admin/suppliers', function () {
    return view('admin/suppliers');
});

Route::get('/admin/users', function () {
    return view('admin/users');
});

// fim rotas sem autenticação


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



require __DIR__ . '/auth.php';
