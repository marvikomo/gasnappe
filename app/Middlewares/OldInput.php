<?php


namespace App\Middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class OldInput
{

    protected $container;
    public function __construct($container)
    {
        $this->container = $container;
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
        $this->container->view->getEnvironment()->addGlobal('old', $_SESSION['old']);
        $_SESSION['old'] = $req->getParams();

        return $next($req, $res);
    }
}