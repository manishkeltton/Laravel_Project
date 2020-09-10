<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');


Route::get('/add-employee',function(){

    return view('admin.add-employee');

})->middleware('auth');


Route::post('/add-employee','employeesController@store')->middleware('auth');

Route::get('/all-employees', 'employeesController@index')->middleware('auth');


Route::get('/delete/{employee_id}', 'employeesController@delete')->middleware('auth');

Route::get('/edit/{employee_id}', 'employeesController@edit')->middleware('auth');

Route::post('/edit', 'employeesController@update')->middleware('auth');

Route::get('/search', 'employeesController@search')->middleware('auth');




//dashboard

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
