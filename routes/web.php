<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TitreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/backoffice',[BackController::class, 'index'])->name('hombo');


Route::resource('/headers', HeaderController::class);
Route::resource('/abouts', AboutController::class);
Route::resource('/portfolios', PortfolioController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/titres', TitreController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
