<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;

class Rolcontroller extends Controller
{
  public function index()
  {
      $rols = Rol::find(80);
    return $rols;
  }
}
