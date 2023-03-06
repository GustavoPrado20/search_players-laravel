<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', )->name('site.index');

Route::get('/home', )->name('site.home');

Route::get('/perfil', )->name('site.perfil');

Route::prefix('/times', function(){
    Route::get('/meus-times', )->name('times.meus-times');
    Route::get('/todos-times', )->name('times.todos-times');
});

Route::get('/campeonatos', )->name('site.campeonatos');

Route::get('/ranking', )->name('site.ranking');

Route::prefix('/configurações', function(){
    Route::get('/config-perfil',)->name('config.perfil');
    Route::get('/config-conta',)->name('config.conta');
    Route::get('/config-localização',)->name('config.localizacao');
});

Route::get('/chat',)->name('site.chat');