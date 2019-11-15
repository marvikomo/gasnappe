<?php
use App\Middleware\IPLogMiddleware;
use App\Middlewares\CsrfView;
use App\Middlewares\OldInput;
use App\Middlewares\TrailingSlash;
use App\Middlewares\ValidationError;

$app->add(new ValidationError($container));

$app->add(new OldInput($container));

$app->add(new CsrfView($container));

$app->add($container->csrf);

$app->add(new TrailingSlash());

$app->add(new IPLogMiddleware($container->get('logger')));

$checkProxyHeaders = true;
$trustedProxies = ['10.0.0.1', '10.0.0.2'];
$app->add(new RKA\Middleware\IpAddress($checkProxyHeaders, $trustedProxies));