<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PastryController;
use App\Http\Controllers\OrderController;

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
Route::get('/', [PastryController::class, 'index'])->name('home');
Route::post('/create', [PastryController::class, 'store']);
Route::get('/create', [PastryController::class, 'create'])->name('create');
Route::get('/{pastry}', [PastryController::class, 'show']);
Route::get('/{pastry}/edit', [PastryController::class, 'edit']);
Route::patch('/{pastry}', [PastryController::class, 'update']);
Route::delete('/{pastry}', [PastryController::class, 'destroy']);

Route::post('/', [OrderController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
