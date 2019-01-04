<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function users() {

    $users = User::all();

    // return $users;

    return view('users.index', [
      'users' => $users
    ]);
  }
}
