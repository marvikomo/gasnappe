<?php


use App\Auth\Auth as Auth;

use App\View\Factory;  //this is ffor paginatioin
use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Monolog\Handler\StreamHandler;
use Twig\TwigFunction;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Respect\Validation\Validator as v;
use App\Validation\Validator;
use Slim\Flash\Messages;

$container = $app->getContainer();
LengthAwarePaginator::viewFactoryResolver(function () use ($container) {
    return new Factory($container->get('settings'));
});

LengthAwarePaginator::defaultView('pagination/layout.twig');

Paginator::currentPathResolver(function () {
    return isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
});

Paginator::currentPageResolver(function () {
    return isset($_GET['page']) ? $_GET['page'] : 1;
});

$container['logger'] = function ($c) {
    $loggerParam = $c['settings']['logger'];
    $logger = new Logger($loggerParam['name']);
    $file_handler = new StreamHandler($loggerParam['path']);
    $logger->pushProcessor(new UidProcessor());
    $logger->pushHandler($file_handler);
    return $logger;
};
$capsule = new Manager;
$capsule->addConnection($container['settings']['db']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};
$container['auth'] = function ($c) {
    return new Auth($c);
};

$container['view'] = function ($c) {
    $settings = $c->get('settings');

    $factory = new Factory($settings);
    $view = $factory->getEngine();
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));

    return $view;
};
$container['flash'] = function () {
    return new Messages();
};
$container['view'] = function ($c) {
    $settings = $c->get('settings');

    $factory = new Factory($settings);
    $view = $factory->getEngine();
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));


    $view->getEnvironment()->addFunction(new TwigFunction('asset', function ($asset) use ($c) {
        return sprintf($c->get('request')->getUri()->getBasePath() . '/assets/%s', ltrim($asset, '/'));
    }));

    $view->getEnvironment()->addGlobal('flash', $c->flash);

    $view->getEnvironment()->addGlobal('auth',[
       /* 'check' =>  $c->get('auth')->check(),
        'user' =>  $c->get('auth')->user(),*/
    ]);
    return $view;
};


$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['view']->render($response->withStatus(404), '404.twig');
    };
};

$container['validator'] = function ($c) {
    return new Validator();
};

$container['csrf'] = function ($c){
    return new Slim\Csrf\Guard();
};




v::with('App\\Validation\\Rules');


