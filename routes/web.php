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

Route::GET('/', 'UserController@Index');

Route::GET('/table', 'MonitoringController@Index');

Route::GET('/statistik', 'MonitoringController@Chart');

Route::GET('update/{Kadar}', 'MonitoringController@Update');
