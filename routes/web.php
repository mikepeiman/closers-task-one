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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*
GET /projects (index, show entire collection)
GET /projects/create (create item in collection)
POST /projects (store - save to DB)
GET /projects/1 (show one specific item from collection - either page view, or sends JSON via API call)
GET /projects/1/edit (edit)
PATCH /projects/1 
DELETE /projects/1
*/

// Route::get('/projects', 'ProjectsController@projects');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{id}', 'ProjectsController@show');
// Route::get('/projects/{id}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{id}', 'ProjectsController@update');
// Route::delete('/projects/{id}', 'ProjectsController@destroy');

// Laravel's automatic route creation:
Route::resource('/projects', 'ProjectsController');

Route::get('/users', 'UsersController@users');

/* other uses of controllers: might have
ProjectsController
TasksController
UsersController 
*/

// Route::get('/', function () {
//   $tasks = [
//     'Go to the store',
//     'Go to the school',
//     'Go to work'
//   ];

//     return view('welcome', [
//       'tasks' => $tasks,
//       'foo' => 'foobar!'
//     ]);


    /* alternate syntax: return view('welcome')->withTasks($tasks)->withFoo('foobar'); */

    /* addition further alternate syntax:
    return view('welcome')->withTasks([
          'Go to the store',
          'Go to the school',
          'Go to work'
    ])
    */

    /* addition further alternate syntax:
    return view('welcome')->with([
      'foo' => 'foobar',
      'tasks' => [
        'Go to the store',
        'Go to the school',
        'Go to work'
      ])

      });
    */


// Route::get('/contact', function() {
//   return view('contact');
// });

// Route::get('/about', function() {
//   return view('about');
// });