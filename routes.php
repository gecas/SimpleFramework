<?php

$router->get('', 'HomeController@index');

$router->post('email', 'FormController@create');