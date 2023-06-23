<?php

use App\Http\Controllers\FighterController;
use App\Models\Fighter;
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
    return view('fighter.home');
})->name("home");


Route::get('/table-fighter', [FighterController::class, 'index'])->name('table-fighter');
Route::get('/form', [FighterController::class, 'create'])->name('form');
Route::post('/simpan-fighter',[FighterController::class, 'store'])->name('simpan-fighter');

