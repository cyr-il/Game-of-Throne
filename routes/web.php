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


$router->get('/',
    [
        'as' => 'charactcontroller-characterList',
        'uses' => 'CharacterController@characterList'
    ]);

$router->get('/character/{id}',
    [
        'as' => 'charactcontroller-findcharacter',
        'uses' => 'CharacterController@findcharacter'
    ]);

$router->get('/houses',
    [
        'as' => 'housecontroller-houseList',
        'uses' => 'HouseController@houseList'
    ]);


$router->get('/house/{id}',
    [
        'as' => 'housecontroller-findhouse',
        'uses' => 'HouseController@findhouse'
    ]);









