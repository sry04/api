<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'v1', 'middleware' => 'has-token'], function() use ($router){
  $router->get('/user', 'v1\UserController@index');
  $router->get('/userStore', 'v1\UserController@store');
  $router->get('/userUpdate/{id}', 'v1\UserController@update');
  $router->get('/userRead/{id}', 'v1\UserController@read');

});
