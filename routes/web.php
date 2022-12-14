<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'index'])->name('user.home');

Route::group(['middleware' => ['admin']], function () {
  Route::get('dashboard', [HomeController::class, 'adminView'])->name('admin.view');
});