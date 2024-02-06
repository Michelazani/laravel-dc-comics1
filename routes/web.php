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

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics') );
});

Route::get('/comics', [GuestComicController::class, 'index']) -> name('comics.index');
Route::get('/comics/{comic}', [GuestComicController::class, 'show'])->name('comics.show');