<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UserController;
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

//Contact
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'send']);

Route::get('/history', function () {
    return view('history');
});

//Products
Route::get('/', [ProductController::class, 'feactured']);
Route::get('/product/{id}', [ProductController::class, 'show']);




Route::get('/admin/users', function () {
    return view('admin/users');
});

// fim rotas sem autenticação

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotas Admin

    Route::get('/admin/categories', function () {
        return view('admin/categories');
    });

    Route::get('/admin/suppliers', [SuppliersController::class, 'index']);

    //Rotas de categorias

    Route::post('/admin/categories', [CategoriesController::class, 'store']);
    Route::get('/admin/categories', [CategoriesController::class, 'index']);

    //Rotas Usuários

    Route::post('/new-user', [UserController::class, 'store']);
    Route::get('/admin/users', [UserController::class, 'index']);

    //Rotas Fornecedores

    Route::post('/admin/new-supplier', [SuppliersController::class, 'store']);
    //Route::get('/admin/suppliers', [SuppliersController::class, 'index']);

    //Rotas Produtos

    Route::get('/admin/catalog', [ProductController::class, 'index']);
    Route::post('/new-product', [ProductController::class, 'store']);
});



require __DIR__ . '/auth.php';
