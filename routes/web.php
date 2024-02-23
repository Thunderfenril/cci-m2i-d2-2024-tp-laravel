<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\{
    Controller,
    AdminController,
};

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

Route::get('/', [Controller::class,'index'])->name('Accueil');

Route::get('/about', [Controller::class,'about'])->name('About');

Route::get('/contact', [Controller::class,'contact'])->name('Contact');

Route::get('/admin', [AdminController::class,'index'])->name('Admin.index');

Route::get('/admin/creer', [AdminController::class,'create'])->name('Admin.create');

Route::post('/admin/store', [AdminController::class,'store'])->name('Admin.store');

Route::get('/admin/show/{id}', [AdminController::class,'show'])->name('Admin.show');

Route::delete('/admin/detruite/{id}', [AdminController::class,'destroy'])->name('Admin.destroy');
