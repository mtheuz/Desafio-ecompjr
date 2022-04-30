<?php

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
    return view('teste');
});
Route::get('cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('teste', function () {
    return view('teste');
})->name('teste');

Auth::routes();
Route::get('/admin', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\AuthController::class, 'loginredirect'])->name('admin.login');
Route::post('/admin/login/do', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login.do');




