<?php

Route::group(['namespace' => 'Luivel\Lui\Http\Controllers', 'middleware' => 'web', 'prefix' => env('LUI_URL')], function ($router) {
    $router->get('/', [
        'uses' => 'LuiController@index',
        'as' => 'lui-dashboard'
    ]);

    $router->get('/login', [
        'uses' => 'LuiController@login',
        'as' => 'lui-login'
    ]);

    $router->post('/login', [
        'uses' => 'LuiController@loginProcess',
        'as' => 'lui-login-post'
    ]);

    $router->post('/routes/add', [
        'uses' => 'LuiController@addRoutes',
        'as' => 'lui-add-routes'
    ]);
});