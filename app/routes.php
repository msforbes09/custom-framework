<?php

$router->get('', 'PagesController@home');
$router->get('computers', 'ComputersController@index');
$router->get('computer/{id}', 'ComputersController@show');
$router->get('computers/create', 'ComputersController@create');
$router->post('computers/create', 'ComputersController@store');
