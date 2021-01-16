<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
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
Route::get('/employee', 'App\Http\Controllers\EmployeeController@employee');
Route::post('/addemployee', 'App\Http\Controllers\EmployeeController@addEmployee');
Route::delete('/deleteemployee/{id}', 'App\Http\Controllers\EmployeeController@deleteEmployee');
Route::patch('/updateemployee/{id}', 'App\Http\Controllers\EmployeeController@updateEmployee');
Route::get('/employeebyid/{id}', 'App\Http\Controllers\EmployeeController@employeeById');
