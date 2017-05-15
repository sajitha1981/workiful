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
});

Route::get('test',[
   
   'uses' => 'TestController@index',
]);

Route::get('form',function(){
   return view('form');
});*/

Route::post('/form/register',array('uses'=>'FormRegistration@postMe'));
Route::resource('my','MyController');
Route::get('/user',[
   
   'uses' => 'UserController@showPath',
]);
Route::get('/users',[
   
   'uses' => 'UserController@test'
]);
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('/test', function () {
    return view('test');
});

Route::get('/contact', 
  ['uses' => 'AboutController@create']);
Route::post('/contact', 
  [ 'uses' => 'AboutController@validateform']);




/*razeqeen code started*/

/*
Route::get('Master-Admin/login', function () {
    return view('Master-Admin/login');
});
?*/
  
Route::get('Master-Admin/error', 
  ['uses' => 'LoginController@error']);

Route::get('Master-Admin/login', 
  ['uses' => 'LoginController@index']);
Route::post('Master-Admin/login', 
  ['uses' => 'LoginController@validateform']);
/*Route::get('Master-Admin/dashboard', function () {
    return view('Master-Admin/dashboard');
});*/
Route::get('Master-Admin/logout', 
  ['uses' => 'LoginController@logout']);
  
Route::get('Master-Admin/dashboard', 
  ['uses' => 'DashboardController@dashboard']);
  
//Route::resource('Master-Admin/list-education', 'EducationController');  
Route::get('Master-Admin/list-education', 
  ['uses' => 'EducationController@index']);
/*  
Route::post('Master-Admin/edu-delete', 
  ['uses' => 'EducationController@eduDelete']); */
Route::post('Master-Admin/list-education', 
  ['uses' => 'EducationController@index']);  

Route::get('Master-Admin/add-edit-education', 
  ['uses' => 'EducationController@AddEditEducation']);  
Route::post('Master-Admin/add-edit-education', 
  ['uses' => 'EducationController@AddEditEducation']);   
  

  
Route::get('Master-Admin/list-countries', 
  ['uses' => 'CountryController@index']);
Route::post('Master-Admin/list-countries', 
  ['uses' => 'CountryController@index']);   

Route::get('Master-Admin/list-states', 
  ['uses' => 'StateController@index']);  
Route::post('Master-Admin/list-states', 
  ['uses' => 'StateController@index']);   
  
  
Route::get('Master-Admin/list-cities', 
  ['uses' => 'CityController@index']);  
Route::post('Master-Admin/list-cities', 
  ['uses' => 'CityController@index']);   
    
Route::get('Master-Admin/list-careers', 
  ['uses' => 'CareerController@index']);  
Route::post('Master-Admin/list-careers', 
  ['uses' => 'CareerController@index']);   
  
Route::get('Master-Admin/list-industries', 
  ['uses' => 'IndustryController@index']);  
Route::post('Master-Admin/list-industries', 
  ['uses' => 'IndustryController@index']);  
  
Route::get('Master-Admin/list-jobcategories', 
  ['uses' => 'JobcategoryController@index']);  
Route::post('Master-Admin/list-jobcategories', 
  ['uses' => 'JobcategoryController@index']);   
      
Route::get('Master-Admin/list-coupons', 
  ['uses' => 'CouponController@index']);  
Route::post('Master-Admin/list-coupons', 
  ['uses' => 'CouponController@index']);    

  