<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exemplocomtroller;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});


Route::get('/exemplo',[Exemplocomtroller::class, 'index']);
Route::get('/aluno',[AlunoController::class, 'index']);
Route::get('/biblioteca',[PostController::class, 'index']);
Route::get('/post',[BibliotecaController::class, 'index']);