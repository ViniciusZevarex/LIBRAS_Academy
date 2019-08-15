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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Course
Route::get('/course/dashboard', 'CourseController@dashboard')->name('course_dashboard');
Route::get('/course/create', 'CourseController@create')->name('course_create');
Route::post('/course/register', 'CourseController@register')->name('course_register');
Route::get('/course/list', 'CourseController@list')->name('course_list');

//Unit
Route::get('/unit/create/form', 'UnitController@showForm')->name('units_showForm');
Route::post('/unit/create/', 'UnitController@create')->name('create_units');

//Module
Route::get('/module/create/form', 'ModuleController@showForm')->name('modules_showForm');
Route::post('/module/create/', 'ModuleController@store')->name('create_modules');

//Timeline
Route::get('/timeline/edit/form', 'TimelineController@edit')->name('edit_timeline');