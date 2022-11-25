<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
use App\Models\User;
use App\Models\Department;
use App\Models\State;
use App\Http\Controllers\EmployeeController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('')->middleware(['auth'])->group(function(){
Route::get('user/employee_reg', [HomeController::class, 'employee'])->name('users.employee_reg');
Route::post('employee/register', [EmployeeController::class, 'register'])->name('employees.register');

// Route::get('user/employee_list', [HomeController::class, 'list'])->name('users.employee_list');
Route::any('employee/show', [EmployeeController::class, 'show'])->name('employees.show');

Route::any('/employee/individual/{id}', [EmployeeController::class, 'individual'])->name('employees.individual');
Route::any('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');

// Route::post('')


});