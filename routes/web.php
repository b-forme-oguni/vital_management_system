<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->group(['prefix' => 'api'], function ($router) {
  //利用者API
  $router->get('/users', 'UserController@index');
  $router->post('/users', 'UserController@store');
  $router->get('/users/{id}', 'UserController@show');
  $router->put('/users/{id}', 'UserController@update');
  $router->delete('/users/{id}', 'UserController@destroy');
  $router->post('/users/selectdelete', 'UserController@selectdelete');
  //天候API
  $router->get('/weather_records', 'WeatherRecordController@index');
  $router->post('/weather_records', 'WeatherRecordController@store');
  $router->get('/weather_records/{id}', 'WeatherRecordController@show');
  $router->put('/weather_records/{id}', 'WeatherRecordController@update');
  //診断記録API
  $router->get('/index/vitals', 'VitalController@simpleIndex');
  $router->get('/vitals', 'VitalController@index');
  $router->post('/vitals', 'VitalController@store');
  $router->get('/vitals/{id}', 'VitalController@show');
  $router->put('/vitals/{id}', 'VitalController@update');
  $router->delete('/vitals/{id}', 'VitalController@destroy');
});

Route::get('{path:.*}', function () {
  return view('app');
});
