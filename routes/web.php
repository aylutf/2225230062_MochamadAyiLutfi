<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


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
    return view('welcome');
});

Route::get('/data1c', [DataController::class, 'index'])->name('data'); 

Route::get('/tambahdata', [DataController::class, 'tambahdata'])->name('tambahdata');
Route::post('/tambahdatac', [DataController::class, 'tambahdatac'])->name('tambahdatac');

Route::get('/tampilkandata/{id}', [DataController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DataController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DataController::class, 'delete'])->name('delete');
