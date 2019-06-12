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

$router->get('/', 'WelcomeController@welcome');
$router->get('/services', 'WelcomeController@services');
$router->get('/contact-us', 'WelcomeController@contactus');
$router->get('/faq', 'WelcomeController@faq');
$router->get('/gallery', 'WelcomeController@gallery');
$router->get('/about-us', 'WelcomeController@aboutus');
$router->get('/booking', 'WelcomeController@booking');
