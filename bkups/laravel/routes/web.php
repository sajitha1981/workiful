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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('test',[
   
   'uses' => 'TestController@index',
]);

Route::resource('my','MyController');
Route::get('user',[
   
   'uses' => 'UserController@showPath',
]);
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('/', function () {
    return view('test');
});