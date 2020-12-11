<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');



Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('user/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
