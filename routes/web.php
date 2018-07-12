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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/triplist', 'TripsController@index');
Route::get('/addtripform', 'TripsController@addform'); 
Route::get('/addtripscheduleform', 'ScheduleController@addform');
Route::get('/bookings', 'BookingsController@index');
Route::post('/addtripscheduleform', 'ScheduleController@addform');

Route::get('/client_schedules', 'ScheduleController@searched_schedules');
Route::get('/schedulelist', 'ScheduleController@view_allschedules');
Route::post('/booktrip', 'BookingsController@booktrip');




