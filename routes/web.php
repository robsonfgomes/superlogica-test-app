<?php

use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\Exercicio2Controller;
use App\Http\Controllers\Exercicio3Controller;
use App\Http\Controllers\HomeController;
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

// Home

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// Exercício 1

Route::get('/exercicio-1', [Exercicio1Controller::class, 'index'])
    ->name('ex1.index');

Route::post('/exercicio-1', [Exercicio1Controller::class, 'cadastrar'])
    ->name('ex1.cadastrar');


// Exercício 2

Route::get('/exercicio-2', [Exercicio2Controller::class, 'index'])
    ->name('ex2.index');


// Exercício 3

Route::get('/exercicio-3', [Exercicio3Controller::class, 'index'])
    ->name('ex3.index');
