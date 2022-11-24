<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

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

Route::get('/dogs', [DogController::class, 'index'])->name('dogs.index');

Route::get('/dogs/create', [DogController::class,'create'])->name('dogs.create');

Route::get('/dogs/{dog}/editar', [DogController::class,'edit'])->name('dogs.edit');
Route::patch('/dogs/{dog}', [DogController::class,'update'])->name('dogs.update');

Route::post('/dogs', [DogController::class,'store'])->name('dogs.store');
Route::get('/dogs/{dog}', [DogController::class,'show'])->name('dogs.show');

Route::delete('/dogs/{dog}', [DogController::class,'destroy'])->name('dogs.destroy');