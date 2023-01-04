<?php

use App\Http\Controllers\wargacontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth'])->group(function(){
    Route::get('/warga',[wargacontroller::class,'index']);
    Route::get('/warga/create',[wargacontroller::class,'create']);
    Route::post('/warga/store',[wargacontroller::class,'store']);
    Route::get('/warga/{id}/edit',[wargacontroller::class,'edit'])->middleware('admin');
    Route::put('/warga/{id}',[wargacontroller::class,'update'])->middleware('admin');
    Route::delete('/warga/{id}',[wargacontroller::class,'destroy'])->middleware('admin');
});






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\wargacontroller::class, 'index'])->name('home');
