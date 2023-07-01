<?php

use App\Models\Product;
use Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Pipeline\Hub;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\AkabController::class, 'index'])->name('accueil');
// Route::get('/{categorie}', [App\Http\Controllers\AkabController::class, 'showcategory'])->name('category');
// Route::get('/{categorie}{id}', [App\Http\Controllers\AkabController::class, 'showarticle'])->name('article');
// Route::get('/{show}{id}', [App\Http\Controllers\AkabController::class, 'showshop'])->name('shop');
// Route::get('/', [App\Http\Controllers\AkabController::class, 'about'])->name('about');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class)->except(['show']);
    Route::resource('shop', \App\Http\Controllers\Admin\ShopController::class)->except(['show']);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class)->except(['show']);
});
