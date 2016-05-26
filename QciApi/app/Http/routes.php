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

$app->get('/usuarios', 'UsuarioController@index');                 //
//$app->post('/usuarios', 'UsuarioController@store');                //
$app->get('/usuarios/{usuarios}', 'UsuarioController@show');       //
//$app->patch('/usuarios/{usuarios}', 'UsuarioController@update');   //
//$app->put('/usuarios/{usuarios}', 'UsuarioController@update');     //
//$app->delete('/usuarios/{usuarios}', 'UsuarioController@destroy'); //

$app->get('/centros/{centros}/usuarios', 'CentroUsuarioController@index');                //
$app->post('/centros/{centros}/usuarios', 'CentroUsuarioController@store');               //
//$app->get('/centros/{centros}/usuarios/{usuarios}', 'CentroUsuarioController@show');       //
$app->patch('/centros/{centros}/usuarios/{usuarios}', 'CentroUsuarioController@update');   //
$app->put('/centros/{centros}/usuarios/{usuarios}', 'CentroUsuarioController@update');     //
$app->delete('/centros/{centros}/usuarios/{usuarios}', 'CentroUsuarioController@destroy'); //

$app->get('/noticias', 'NoticiaController@index');                //
//$app->post('/noticias', 'NoticiaController@store');               //
$app->get('/noticias/{noticias}', 'NoticiaController@show');       //
//$app->patch('/noticias/{noticias}', 'NoticiaController@update');   //
//$app->put('/noticias/{noticias}', 'NoticiaController@update');     //
//$app->delete('/noticias/{noticias}', 'NoticiaController@destroy'); //

$app->get('/centros/{centros}/noticias', 'CentroNoticiaController@index');                //
$app->post('/centros/{centros}/noticias', 'CentroNoticiaController@store');               //
//$app->get('/centros/{centros}/noticias/{noticias}', 'CentroNoticiaController@show');       //
$app->patch('/centros/{centros}/noticias/{noticias}', 'CentroNoticiaController@update');   //
$app->put('/centros/{centros}/noticias/{noticias}', 'CentroNoticiaController@update');     //
$app->delete('/centros/{centros}/noticias/{noticias}', 'CentroNoticiaController@destroy'); //