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

Route::get('page', function (){
    return view('page');
});


Route::get('article/details/{id}', 'ArticleController@details');
Route::get('article/list', 'ArticleController@articles');

Route::get('students/list', 'StudentsController@students');
Route::get('students/details/{id}', 'StudentsController@details');

Route::get('students/add', 'StudentsController@add');
Route::post('students/add', 'StudentsController@save')->name('studentSave');