<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
  public function index()
  {
      $users = User::find(25);
    return $users;
  }
}
