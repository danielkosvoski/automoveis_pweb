<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ClienteController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



Route::resource('automovel', AutomovelController::class);
Route::post('/automovel/search', [AutomovelController::class, "search"])->name('automovel.search');

Route::resource('moto', MotoController::class);
Route::post('/moto/search', [MotoController::class, "search"])->name('moto.search');

Route::resource('loja', LojaController::class);
Route::post('/loja/search', [LojaController::class, "search"])->name('loja.search');

Route::resource('cliente', ClienteController::class);
Route::post('/cliente/search', [ClienteController::class, "search"])->name('cliente.search');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
