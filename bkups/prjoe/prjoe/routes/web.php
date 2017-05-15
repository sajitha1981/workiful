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
    return view('welcome');
});
Route::resource('my','MyController');

Route::get('/register',function(){
   return view('register',['name'=>'Virat Gandhi']);
});

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::post('/form/register',array('uses'=>'FormRegistration@postMe'));

Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
});

Route::get('/form',function(){
	
	
   return view('form');
});



Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::post('/getmsg','ValidationController@getms');