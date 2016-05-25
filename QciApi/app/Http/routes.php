<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/centros', 'CentroController@index');                //
$app->post('/centros', 'CentroController@store');               //
$app->get('/centros/{centros}', 'CentroController@show');       //
$app->patch('/centros/{centros}', 'CentroController@update');   //
$app->put('/centros/{centros}', 'CentroController@update');     //
$app->delete('/centros/{centros}', 'CentroController@destroy'); //

