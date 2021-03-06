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
    return $app->welcome();
});


$app->get('testing/email', 'AppointController@sendEmail'); //probar correo

$app->post('init/register','RegisterController@register');

$app->post('appointment/new','AppointController@makeAppointment');

$app->post('appointment/status','AppointController@changeStatus');