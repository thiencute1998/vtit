<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Viewer\IndexController;
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

//Admin
Route::get('admin/login', [AuthController::class, 'index'])->name('login-index');

Route::post('admin/login', [AuthController::class, 'login'])->name('login-auth');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout-auth');

Route::prefix('admin')->middleware(['checkLogin'])->group(function () {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin-index');

    Route::prefix('configs')->group(function () {
        Route::get('/', [ConfigController::class, 'index'])->name('configs');
        Route::post('/update', [ConfigController::class, 'update'])->name('configs-update');
    });

    Route::prefix('product')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('admin-product');
        Route::get('/create', [ProductController::class, 'create'])->name('admin-product-create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin-product-store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin-product-edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('admin-product-update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('admin-product-delete');
    });

    Route::prefix('application')->group(function() {
        Route::get('/', [ApplicationController::class, 'index'])->name('admin-application');
        Route::get('/create', [ApplicationController::class, 'create'])->name('admin-application-create');
        Route::post('/store', [ApplicationController::class, 'store'])->name('admin-application-store');
        Route::get('/edit/{id}', [ApplicationController::class, 'edit'])->name('admin-application-edit');
        Route::post('/update/{id}', [ApplicationController::class, 'update'])->name('admin-application-update');
        Route::get('/delete/{id}', [ApplicationController::class, 'delete'])->name('admin-application-delete');
    });

    Route::prefix('quote')->group(function () {
        Route::get('/', [QuoteController::class, 'index'])->name('admin-quote');
        Route::get('/view/{id}', [QuoteController::class, 'view'])->name('admin-quote-view');
        Route::get('/delete/{id}', [QuoteController::class, 'delete'])->name('admin-quote-delete');
    });

    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('admin-about');
        Route::post('/update', [AboutController::class, 'update'])->name('admin-about-update');
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin-contact');
        Route::get('/view/{id}', [ContactController::class, 'view'])->name('admin-contact-view');
        Route::get('/delete/{id}', [ContactController::class, 'delete'])->name('admin-contact-delete');
    });

});





// Viewer
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/request-a-quote', [IndexController::class, 'quote'])->name('quote');
Route::post('/request-quote', [IndexController::class, 'requestQuote'])->name('request-quote');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/send-contact', [IndexController::class, 'sendContact'])->name('send-contact');
