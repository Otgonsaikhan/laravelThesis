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

Route::resource('answer', 'AnswerController');
Route::get('/Answer', 'AnswerController@index');
Route::get('/Answer/create', 'AnswerController@create');
Route::post('/Answer/create')->name('answer.create');

Route::resource('question', 'QuestionController');
Route::get('/Question', 'QuestionController@index');
Route::get('/Question/create', 'QuestionController@create');
Route::post('/Question/create')->name('question.create');

Route::resource('level', 'LevelController');
Route::get('/Level', 'LevelController@index');
Route::get('/Level/create', 'LevelController@create');
Route::post('/Level/create')->name('level.create');

Route::resource('lesson', 'LessonController');
Route::get('/Lesson', 'LessonController@index');
Route::get('/Lesson/create', 'LessonController@create');
Route::post('/Lesson/create')->name('lesson.create');

Route::get('/AnswerGet', 'GetController@answer');

Route::get('/LessonGet', 'GetController@lesson');

Route::get('/LevelGet', 'GetController@level');

Route::get('/QuestionGet', 'GetController@question');