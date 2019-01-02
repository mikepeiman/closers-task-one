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
  $tasks = [
    'Go to the store',
    'Go to the school',
    'Go to work'
  ];

    return view('welcome', [
      'tasks' => $tasks,
      'foo' => 'foobar!'
    ]);
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
    */
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/about', function() {
  return view('about');
});