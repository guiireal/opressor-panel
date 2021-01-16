<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::prefix('search')->name('search.')->group(function () {
    Route::get('cpf', [SearchController::class, 'cpf'])->name('cpf');
    Route::post('cpf', [SearchController::class, 'postCpf'])->name('postCPF');
});
