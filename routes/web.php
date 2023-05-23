<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CitasController;

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
Route::get('/acerca',[AcercaController::class,'sobre_acerca']);

Route::post('/auth/save', [MainController::class,'save']) ->name('auth.save');
Route::post('/auth/checkk', [MainController::class,'checkk']) ->name('auth.checkk');
Route::get('/auth/logout', [MainController::class,'logout']) ->name('auth.logout');
// estos deberian ir dentro del grupo, pero sale error xd
Route::get('/auth/login', [MainController::class,'login']) ->name('auth.login');
Route::get('/auth/register', [MainController::class,'register']) ->name('auth.register');
Route::get('/admin/dashboard', [MainController::class,'dashboard']);
Route::get('/admin/settings', [MainController::class,'settings']);
Route::get('/admin/profile', [MainController::class,'profile']);
Route::get('/admin/staff', [MainController::class,'staff']);
Route::resource('/admin/citas',CitasController::class);

Route::group(['middleware'=>['AuthCheck']], function(){

});


