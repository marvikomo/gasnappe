<?php

use App\Controllers\HomeController;


$app->get('/', HomeController::class. ':home')->setName('home');

$app->get('/register', HomeController::class. ':getRegister')->setName('register');
$app->post('/register', HomeController::class. ':postRegister')->setName('register');
$app->get('/login', HomeController::class. ':getLogin')->setName('login');
$app->post('/login', HomeController::class. ':postLogin')->setName('login');
$app->get('/order', HomeController::class. ':getOrder')->setName('order');
