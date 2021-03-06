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
Route::get('/course/create/form', 'CourseController@showForm')->name('course_create');
Route::post('/course/create', 'CourseController@store')->name('course_store');
Route::get('/course/edit/form', 'CourseController@showform')->name('course_edit_form');
Route::post('/course/edit', 'CourseController@update')->name('course_edit');
Route::get('/course/list', 'CourseController@list')->name('course_list');
Route::get('/course/delete','CourseController@delete')->course('course_delete');

//Unit
Route::get('/unit/create/form', 'UnitController@showForm')->name('units_showForm');
Route::post('/unit/create/', 'UnitController@create')->name('create_units');

//Module
Route::get('/module/create/form', 'ModuleController@showForm')->name('modules_showForm');
Route::post('/module/create/', 'ModuleController@store')->name('create_modules');

//Timeline
Route::get('/timeline/edit/form', 'TimelineController@edit')->name('edit_timeline');
Route::post('/timeline/adicionar-elemento/', 'TimelineController@criar_elemento')->name('adicionar_elemento_timeline');
Route::get('/timeline/show', 'TimelineController@show')->name('show_timeline');

//Explain
Route::get('/explain/create/form', 'ExplainController@showForm')->name('form_explain');
Route::post('/explain/create', 'ExplainController@create')->name('create_explain');

//Vocabulary
Route::get('/vocabulary/create/form', 'VocabularyController@showForm')->name('form_vocabulary');
Route::post('/vocabulary/create', 'VocabularyController@create')->name('create_vocabulary');

//Quiz
Route::get('/quiz/create/form', 'QuizController@showForm')->name('form_quiz');
Route::post('/quiz/create','QuizController@create')->name('create_quiz');
Route::post('/quiz/correct','QuizController@correct')->name('correct_quiz');
