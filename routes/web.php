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

Route::get('/olamundo', function(){
	return "Hello World!";
});

Route::get('/olapessoa/{name}', function($name='Estranho'){
	return "Hello " . $name;
});

Route::get('/', function () {
    return view('welcome');
});

//oi mundo

Route::get('pm2/{palavra}','StringsController@pm');