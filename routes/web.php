<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\StudentController;

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
Route::get('logout', [LoginController::class,'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('user.home');
Route::get('/students',[StudentController::class,'index'])->name('user.students');

Route::get('/add_student',[StudentController::class,'index'])->name('user.widgets.add_student');  
Route::post('store-student-form',[StudentController::class,'store_student']);//добавляем с помощью контроллера пост
Route::get('student.delete/{id}', [StudentController::class,'delete_student']);// удаляем студента с помощью контроллера
Route::group(['middleware' => ['admin']], function () {
  Route::get('dashboard', [HomeController::class, 'adminView'])->name('admin.view');
});