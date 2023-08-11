<?php

use App\Http\Controllers\ApicepController;
use App\Http\Controllers\ApiGithubController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/apiviacep',[ApicepController::class,'index'])->name('apiviacep.index');
Route::get('/consultar',[ApicepController::class,'consultar'])->name('apiviacep.consulta');
Route::post('/limparconsulta',[ApicepController::class,'limparconsultar'])->name('apiviacep.limpar');
Route::post('/exportar',[ApicepController::class,'exportar'])->name('exportar');

Route::get('/apigithub',[ApiGithubController::class,'index'])->name('apigithub.index');
Route::get('/github',[ApiGithubController::class,'show'])->name('apigithub.show');
