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


Route::get('/', function () {
    return view('welcome');
});

	Route::get('/contact', function () {
    return view('contact');
});
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/student', function(){
			return view ('student.reg');
		})->name('show.form')->middleware('meddy');
		
Route::post('/store', 'StudentController@store');
Route::get('/index', 'StudentController@index');
Route::get('/show/{id}', 'StudentController@show')->name('show.student');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//authstudent route

Route::get('/student/{name}', 'AuthStudentController@show')->name('student');
