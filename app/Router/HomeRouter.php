<?php

use App\Controllers\HomeController;


$app->get('/', HomeController::class. ':home')->setName('home');

$app->get('/register', HomeController::class. ':register')->setName('register');
$app->get('/category', HomeController::class. ':getCategory')->setName('category');

$app->post('/register/profile', HomeController::class. ':postRegister')->setName('register.profile');
$app->get('/profile/view', HomeController::class. ':getProfile')->setName('profile');