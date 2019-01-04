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

GET /projects (index)
GET /projects/create (create)
POST /projects (store)
GET /projects/1/edit (edit)
PATCH /projects/1 
DELETE /projects/1

*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/projects', 'ProjectsController@projects');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/edit', 'ProjectsController@update');
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