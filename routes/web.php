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

Route::get('/', 'pagesController@getindex');
Route::get('/index', 'pagesController@getindex');

Route::get('/attendence', 'pagesController@getattendence');
Route::get('/datesheet','Datesheetcontroller@getdatesheet');
Route::get('/home', 'pagesController@gethome');
Route::get('/marksheet', 'maksController@getMarks');
Route::get('/student', 'studentController@getStudentDetails');
Route::get('/teacher', 'pagesController@getteacher');
Route::resource('studentdetails', 'studentController');
Route::get('/teacherquiz', 'pagesController@setquiz');
Route::get('/teachersetmarks', 'pagesController@setmarks');
Route::get('/teacherlogin', 'pagesController@getteacherlogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
