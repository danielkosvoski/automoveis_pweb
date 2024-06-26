<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\LojaController;

Route::get('/', function () {
    return view('welcome');
});
/*
//routes/web.php
Route::get('/aluno', [AlunoController::class, "index"]);
//carrega o formulário
Route::get('/aluno/create', [AlunoController::class, "create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post('/aluno', [AlunoController::class, "store"])->name('aluno.store');
//Route::get('/aluno/destroy/{$id}', [AlunoController::class, "destroy"])->name('aluno.destroy');
Route::delete('/aluno/{$aluno}',
 [AlunoController::class, "destroy"])->name('aluno.destroy');

 Route::get('/aluno/edit/{id}', [AlunoController::class, "edit"])
    ->name('aluno.edit');
 Route::post('/aluno',
  [AlunoController::class, "update"])->name('aluno.update');

  Route::resource('aluno', AlunoController::class);
Route::post('/aluno/search', [AlunoController::class, "search"])->name('aluno.search');
*/



Route::resource('automovel', AutomovelController::class);
Route::post('/automovel/search', [AutomovelController::class, "search"])->name('automovel.search');

Route::resource('moto', MotoController::class);
Route::post('/moto/search', [MotoController::class, "search"])->name('moto.search');

Route::resource('loja', LojaController::class);
Route::post('/loja/search', [LojaController::class, "search"])->name('loja.search');


