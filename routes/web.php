<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
// route per pagina Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route per pagina Comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Route per creazione pagina (1 step)
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Route per creazione pagina (2 step)
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Route per pagina dettaglio
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
