<?php

use App\Http\Controllers\AudioBooks\AudioBooksController;
use App\Http\Controllers\Books\BooksController;
use App\Http\Controllers\Documents\DocumentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Magazines\MagazinesController;
use App\Http\Controllers\Podcasts\PodcastsController;
use App\Http\Controllers\SheetMusic\SheetMusicController;
use App\Http\Controllers\Snapshots\SnapshotsController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/books', [BooksController::class, 'index'])->name('books');

Route::get('/books/categories', [BooksController::class, 'index'])->name('books.categories');

Route::get('/books/editors_picks', [BooksController::class, 'index'])->name('books.editors_picks');

Route::get('/audiobooks', [AudioBooksController::class, 'index'])->name('audiobooks');

Route::get('/magazines', [MagazinesController::class, 'index'])->name('magazines');

ROute::get('/podcasts', [PodcastsController::class, 'index'])->name('podcasts');

Route::get('/sheetmusic', [SheetMusicController::class, 'index'])->name('sheetmusic');

Route::get('/documents', [DocumentsController::class, 'index'])->name('documents');

Route::get('/snapshots', [SnapshotsController::class, 'index'])->name('snapshots');


require __DIR__ . '/auth.php';