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

Route::get('/routelist', 'RoutesController@index');
Route::get('/addrouteform', 'RoutesController@addform'); 
Route::post('/editroute', 'RoutesController@edit_route_form');
Route::post('/editroute_action', 'RoutesController@update_route'); 
Route::post('/addroute_action', 'RoutesController@create_route');
Route::post('/deleteroute_action', 'RoutesController@delete_route');

Route::get('/schedulelist', 'ScheduleController@view_allschedules');
Route::get('/client_schedules', 'ScheduleController@searched_schedules');
Route::post('/addroutescheduleform', 'ScheduleController@addform');
Route::get('/schedule_route_form', 'ScheduleController@addform');
Route::post('/schedule_route_form', 'ScheduleController@addform');



Route::get('/bookings', 'BookingsController@index');
Route::post('/booktrip', 'BookingsController@booktrip');

Route::get('/townlist', 'TownsController@index'); 
Route::get('/addtownform', 'TownsController@addform'); 
Route::post('/edittown', 'TownsController@edit_town_form');
Route::post('/edittown_action', 'TownsController@update_town'); 
Route::post('/addtown_action', 'TownsController@create_town');
Route::post('/deletetown_action', 'TownsController@delete_town');
 



