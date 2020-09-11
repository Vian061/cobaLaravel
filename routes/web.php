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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Route Mahasiswa
Route::get('/mahasiswa', 'StudentsController@index');
Route::get('/mahasiswa-update-{student}', 'StudentsController@edit');
Route::get('/mahasiswa-insert', 'StudentsController@create');
Route::get('/mahasiswa-{student}', 'StudentsController@show');
// Insert Data to Table
Route::post('/mahasiswa', 'StudentsController@store');
// Delete Data from Table
Route::delete('/mahasiswa-{student}', 'StudentsController@destroy');
// Update Data
Route::patch('/mahasiswa-{student}', 'StudentsController@update');