<?php


namespace App\Middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CsrfView
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
        $this->container->view->getEnvironment()->addGlobal('csrf', [
            'field' => '
            <input type="hidden" name="' . $this->container->csrf->getTokenNameKey() . '" value="'.$this->container->csrf->getTokenName().'">
            
            <input type="hidden" name="' . $this->container->csrf->getTokenValueKey() . '" value="'.$this->container->csrf->getTokenValue().'">
            '
        ]);
        return $next($req, $res);
    }
}