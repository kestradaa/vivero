<?php

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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('plants', 'PlantController');
    Route::get('plants/{plant}/losses', 'PlantController@losses');
    Route::resource('employees', 'EmployeeController');
    Route::resource('bags', 'BagController');
    Route::resource('losses', 'LossController');
    Route::resource('withdrawals', 'WithdrawalController');
    Route::resource('processes', 'ProcessController');
    Route::view('admin', 'admin.dashboard.index')->name('admin.dash');
});
