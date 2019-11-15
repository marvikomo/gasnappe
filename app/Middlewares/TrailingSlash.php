<?php


namespace App\Middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class TrailingSlash
{

    public function __construct()
    {
    }

    /**
     * IPLo middleware invokable class
     *
     * @param ServerRequestInterface $req PSR7 request
     * @param ResponseInterface $res PSR7 response
     * @param callable $next Next middleware
     *
     * @return ResponseInterface
     */
    public function __invoke($req, $res, $next)
    {

        $uri = $req->getUri();
        $path = $uri->getPath();
        if ($path != '/' && substr($path, -1) == '/') {
            // permanently redirect paths with a trailing slash
            // to their non-trailing counterpart
            $uri = $uri->withPath(substr($path, 0, -1));

            if ($req->getMethod() == 'GET') {
                return $res->withRedirect((string)$uri, 301);
            } else {
                return $next($req->withUri($uri), $res);
            }
        }

        return $next($req, $res);
    }
}