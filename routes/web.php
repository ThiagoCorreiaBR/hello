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

Route::get('/', function () { //rota inicial
    return view('welcome');
});

route::get('/login', function(){ //rota nova
    return view('login');
});

route::get('/act', function(){
    return view('act');
});
