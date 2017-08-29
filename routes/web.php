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
$app->group(['prefix' => 'api/'], function ($app) {
    $app->get('tipos_inmueble/','TiposInmuebleController@index');//get all the routes	
    $app->post('tipos_inmueble/','TipoTiposInmueblesInmuebleController@store');//store single route
    $app->get('tipos_inmueble/{id}/', 'TiposInmuebleController@show');//get single route
    $app->put('tipos_inmueble/{id}/','TiposInmuebleController@update');//update single route
    $app->delete('tipos_inmueble/{id}/','TiposInmuebleController@destroy');//delete singleTiposInmueblee
});