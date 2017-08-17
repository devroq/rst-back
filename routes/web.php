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
$app->group(['prefix' => 'api/'], function ($app) {
    $app->get('tipos_inmueble/','TiposInmuebleController@index'); //get all the routes	
    $app->post('/','TipoTiposInmueblesInmuebleController@store'); //store single route
    $app->get('/{id}/', 'TiposInmuebleController@show'); //get single route
    $app->put('/{id}/','TiposInmuebleController@update'); //update single route
    $app->delete('/{id}/','TiposInmuebleController@destroy'); //delete singleTiposInmueblee
});