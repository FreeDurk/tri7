<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::post('/login' , [LoginController::class , 'login']);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/list' , [EmployeeController::class , 'index']);
    Route::get('/create' , [EmployeeController::class , 'create']);
    Route::post('/store' , [EmployeeController::class , 'store']);
    Route::get('/edit/{id}' , [EmployeeController::class , 'edit']);
    Route::post('/edit/{id}' , [EmployeeController::class , 'update']);
    Route::get('/delete/{id}', [EmployeeController::class , 'delete']);

    Route::get('/logout' , [LoginController::class , 'logout']);
});

