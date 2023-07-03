<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ComicController;

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

Route::resource('comics', ComicController::class);
Route::get('/', [PageController::class,'home']);
// php artisan make:controller guest/ComicController --resource
Route::post('/comics/{comic}/restore', [ComicController::class,'restore'])->name('comics.restore');



// Route::get('/', [ComicController::class,'home'])->name('home');

// Route::get('/comics/index', [ComicController::class,'index'])->name('comics.index');

// Route::get('/comics/{id}', [ComicController::class,'show'])->name('comics.show');

// Route::get('/comics/create', [ComicController::class,'create'])->name('comics.create');