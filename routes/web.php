<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\TonerController;
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

Route::get('/', function () {
    $title = 'Dashboard';
    return view('dashboard', compact('title'));
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('toners', TonerController::class);
Route::resource('servicos', ServicosController::class);
