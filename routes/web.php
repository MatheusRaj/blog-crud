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

$router->get('posts', 'PostController@listar');

$router->post('posts', 'PostController@criar');

$router->put('posts', 'PostController@editar');

$router->get('posts/{id}', 'PostController@pesquisar');

$router->delete('posts/{id}', 'PostController@deletar');

$router->get('categories', 'CategoryController@listar');

$router->post('categories', 'CategoryController@criar');

$router->put('categories', 'CategoryController@editar');

$router->get('categories/{id}', 'CategoryController@pesquisar');

$router->delete('categories/{id}', 'CategoryController@deletar');
