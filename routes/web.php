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
    $showpage=''; 
    return view('demo.index',['showpage'=>$showpage]);
}); 

Route::get('/news', 'MainController@news');
Route::get('/courses', 'MainController@courses');
Route::get('/subjects', 'MainController@subjects');
Route::get('/calendars', 'MainController@calendars');
Route::get('/usersselect', 'MainController@usersselect');
Route::get('/logout', 'MainController@logout');
Route::get('/login', 'MainController@login');
Route::post('/dologin', 'MainController@dologin');

Route::get('/positions', function () {
    $showpage='positions';
    return view('demo.position',['showpage'=>$showpage]);
}); 
Route::get('/employee', function () {
    $showpage='positions';
    return view('demo.employee',['showpage'=>$showpage]);
});  
 
Route::get('/services', function () {
    $showpage='courses';
    return view('demo.services',['showpage'=>$showpage]);
}); 
Route::get('/orders', function () {
    $showpage='orders';
    return view('demo.orders',['showpage'=>$showpage]);
}); 

Route::get('/reports', function () {
    $showpage='reports';
    return view('demo.reports',['showpage'=>$showpage]);
}); 