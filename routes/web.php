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

Route::get('/', [Controllers\IndexController::class, ''] )->name('site.index');

Route::get('/home', [Controllers\HomeController::class, ''] )->name('site.home');

Route::get('/perfil', [Controller\PerfilController::class, ''] )->name('site.perfil');

Route::get('/campeonatos', [Controllers\CampeonatosControllers::class, ''] )->name('site.campeonatos');

Route::get('/ranking', [Controllers\RankingController::class, ''] )->name('site.ranking');

Route::get('/chat', [Controllers\ChatController::class, ''] )->name('site.chat');

Route::prefix('/times')->group(function(){
    Route::get('/meus-times', [Controllers\MeusTimesController::class, ''] )->name('times.meus-times');
    Route::get('/todos-times', [Controllers\TodosTimesControllers::class, ''] )->name('times.todos-times');
});

Route::prefix('/configurações')->group(function(){
    Route::get('/config-perfil', [Controllers\ConfigPerfilControllers::class, ''])->name('config.perfil');
    Route::get('/config-conta', [Controllers\ConfigContaController::class, ''] )->name('config.conta');
    Route::get('/config-localização', [Controllers\ConfigLocalizacao::class, ''])->name('config.localizacao');
});
