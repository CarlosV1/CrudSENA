<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Ficha\FichaController;
use App\Http\Controllers\Aprendices\AprendizController;

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

Route::resource('escritorio',dashboardController::class);
Route::resource('perfil',dashboardController::class);




Route::get( 'login',[loginController::class,'form_login'])->name('login.form_login');
Route::post( 'auth',[loginController::class,'auth'])->name('login.auth');

//Instructores
Route::resource('Instructor',InstructorController::class);



//Ficha
Route::resource('ficha',FichaController::class);


//Aprendices
Route::resource('Aprendiz',AprendizController::class);

