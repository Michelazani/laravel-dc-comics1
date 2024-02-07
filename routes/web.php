<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', function () {
    $comics = config('db.comics');
    return view('pages.comics', compact('comics') );
}) ->name('pages.comics');

Route::get('/comics', [GuestComicController::class, 'index']) -> name('comics.index');
Route::post('/comics', [GuestComicController::class, 'store'])->name('comics.store');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{comic}', [GuestComicController::class, 'show'])->name('comics.show');
Route::put('/comics/{comic}', [GuestComicController::class, 'update'])->name('comics.update');
Route::get('/comics/{comic}/edit', [GuestComicController::class, 'edit'])->name('comics.edit');