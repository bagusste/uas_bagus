<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tambahan', [App\Http\Controllers\TambahanController::class, 'index'])->name('tambahan')->middleware('auth');
Route::get('/tambahan/create', [App\Http\Controllers\TambahanController::class, 'create'])->name('tambahan')->middleware('auth');
Route::post('/tambahan/store', [App\Http\Controllers\TambahanController::class, 'store'])->name('tambahan')->middleware('auth');
Route::get('/tambahan/edit/{id}', [App\Http\Controllers\TambahanController::class, 'edit'])->name('tambahan')->middleware('auth');
Route::post('/tambahan/update/{id}', [App\Http\Controllers\TambahanController::class, 'update'])->name('tambahan')->middleware('auth');
Route::get('/tambahan/delete/{id}', [App\Http\Controllers\TambahanController::class, 'destroy'])->name('tambahan')->middleware('auth');

Route::get('/members', [App\Http\Controllers\MembersController::class, 'index'])->name('members')->middleware('auth');
Route::get('/members/create', [App\Http\Controllers\MembersController::class, 'create'])->name('members')->middleware('auth');
Route::post('/members/store', [App\Http\Controllers\MembersController::class, 'store'])->name('members')->middleware('auth');
Route::get('/members/edit/{id}', [App\Http\Controllers\MembersController::class, 'edit'])->name('members')->middleware('auth');
Route::post('/members/update/{id}', [App\Http\Controllers\MembersController::class, 'update'])->name('members')->middleware('auth');
Route::get('/members/delete/{id}', [App\Http\Controllers\MembersController::class, 'destroy'])->name('members')->middleware('auth');

Route::get('/user', function () {
    return view('user');
})->name('user')->middleware('auth');
