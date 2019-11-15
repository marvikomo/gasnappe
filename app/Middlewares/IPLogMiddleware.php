<?php

namespace App\Middleware;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Monolog\Logger as Logger;

class IPLogMiddleware
{

protected  $logger;

/**
* IPLo middleware invokable class
*
* @param ServerRequestInterface $request PSR7 request
* @param ResponseInterface $response PSR7 response
* @param callable $next Next middleware
*
* @return ResponseInterface
*/
public function __invoke($request, $response, $next)
{
$response = $next($request, $response);
$ip = $request->getAttribute('ip_address');
$this->logger->info("[$ip]: " . $request->getUri());
return $response;
}

public function __construct(Logger $logger)
{
$this->logger = $logger;
}
}