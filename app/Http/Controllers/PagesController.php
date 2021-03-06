<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $tasks = [
        'Go to the store',
        'Go to the school',
        'Go to work'
      ];
    
        return view('welcome', [
          'tasks' => $tasks,
          'foo' => 'foobar!'
        ]);
    }

    public function about() {
      return view('about');
    }

    public function contact() {
      return view ('contact');
    }

    public function projects() {
      return view ('projects');
    }

    public function users() {
      return view ('users');
    }
}
