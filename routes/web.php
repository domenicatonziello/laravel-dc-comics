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


// Route per pagina dettaglio
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Route per creazione pagina (2 step)
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Route per pagina edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Route per update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Route per delete
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
