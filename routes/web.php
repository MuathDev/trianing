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

GET /projects (index) --> show all projects

GET /projects/create  (create) --> show a form create  project

GET /projects/1 (show)--> show a project

POST /projects (store) --> store any project

GET /projects/1/edit (edit) --> show form edit project

PATCH /projects/1 (update) --> update that project

DELETE /projects/1 (destroy) --> delete that project







Route::get('/projects','ProjectsController@index');

Route::get('/projects/create','ProjectsController@create');

Route::get('/projects/{project}','ProjectsController@show');

Route::post('/projects','ProjectsController@store');

Route::get('/projects/{project}/edit','ProjectsController@edit');

Route::patch('/projects/{project}','ProjectsController@update');

Route::delete('/projects/{project}','ProjectsController@destroy');


*/

Route::resource('projects', 'ProjectsController');




