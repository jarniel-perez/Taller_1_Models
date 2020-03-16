<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/formatojson', function () {

    $users = App\user::get()->toJson();
    return Response::Json($users);
    //return view('welcome');
});*/


Route::get('/consulta', 'Usercontroller@index');

Route::get('/consulta_rol', 'Rolcontroller@index');
