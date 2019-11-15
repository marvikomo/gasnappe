<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;

abstract class Controller
{

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {
        if ($this->container->{$name}) {
            return $this->container->{$name};
        }
    }
}