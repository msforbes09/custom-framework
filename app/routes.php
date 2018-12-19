<?php

$router->get('', 'PagesController@home');
$router->get('computers', 'ComputersController@index');
$router->get('computers/create', 'ComputersController@create');
