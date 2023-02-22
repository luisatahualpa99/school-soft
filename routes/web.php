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

/* 
Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'homeController@index')->name('inicio');



/* Rutas estudiantes */
Route::get('/studenst-history', 'StudentController@history')->name('students-history');
Route::get('/studenst-new', 'StudentController@create')->name('students-new');


// Route::get('/studenst-get-all', 'StudentController@history-get-all');



// Route::get('/studenst-history', 'StudentController@history');