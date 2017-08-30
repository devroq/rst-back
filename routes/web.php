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

$app->get('/', function () use ($app) {
    return $app->version();
});
//Tipos de inmueble
$app->group(['prefix' => 'api/tipos_inmueble'], function ($app) {
    $app->get('/','TiposInmuebleController@index');//get all the tipos_inmueble	
    $app->post('/','TiposInmuebleController@store');//store single route
    $app->get('/{id}/', 'TiposInmuebleController@show');//get single route
    $app->put('/{id}/','TiposInmuebleController@update');//update single route
    $app->delete('/{id}/','TiposInmuebleController@destroy');//delete singleTiposInmueblee
});