<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\Form3Controller;
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
    return view('home2');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/survey', [DashboardController::class, 'survey'])->name('survey');
Route::get('/form1s/create', [Form1Controller::class, 'create'])->name('form1s.create');
Route::post('/form1s', [Form1Controller::class, 'store'])->name('form1s.store');

Route::get('/form2s/create', [Form2Controller::class, 'create'])->name('form2s.create');
Route::post('/form2s', [Form2Controller::class, 'store'])->name('form2s.store');

Route::get('/form3s/create', [Form3Controller::class, 'create'])->name('form3s.create');
Route::post('/form3s', [Form3Controller::class, 'store'])->name('form3s.store');
Route::get('/form1s/show', [Form1Controller::class, 'show'])->name('form1s.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
