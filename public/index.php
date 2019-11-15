<?php
date_default_timezone_set('Africa/Lagos');

use Slim\App;
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Config/Constants.php';
$settings = require __DIR__ . '/../app/Config/settings.php';
$app = new App($settings);


require __DIR__ . '/../bootstrap/app.php';
require __DIR__ . '/../app/Router/HomeRouter.php';
require __DIR__ . '/../app/Middlewares/WebMiddlewares.php';

$app->run();