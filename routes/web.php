<?php

use App\Http\Controllers\HomesController;
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

Route::get("/", [HomesController::class, "index"] )->name('home');
Route::get("/create", [HomesController::class, "create"] )->name('create');
Route::post("/store", [HomesController::class, "store"] )->name('store');
Route::get("/show/{id}", [HomesController::class, "show"] )->name('show');
Route::get("/delete/{id}", [HomesController::class, "destroy"] )->name('destroy');
Route::get("/edit/{id}", [HomesController::class, "edit"] )->name('edit');
Route::post("/update/{id}", [HomesController::class, "update"] )->name('update');
