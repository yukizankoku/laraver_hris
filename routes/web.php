<?php

use App\Http\Controllers\AdminDepartmentController;
use App\Http\Controllers\AdminJabatanController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index', [
        "title" => "Login"
    ]);
});

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
});

Route::resource('/dashboard/employees', EmployeesController::class)->middleware('auth');

Route::resource('/dashboard/jabatan', AdminJabatanController::class)->except('show')->middleware('auth');

Route::resource('/dashboard/department', AdminDepartmentController::class)->except('show')->middleware('auth');