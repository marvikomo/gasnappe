<?php


namespace App\View;


use Slim\Views\Twig;

$settings = require __DIR__ . '/../Config/settings.php';

class Factory
{

    protected $view;

    protected $settings;


    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function getEngine()
    {
        return new Twig($this->settings['view']['template_path'], $this->settings['view']['twig']);
    }

    public function make($view, $data = [])
    {
        $this->view = static::getEngine()->fetch($view, $data);

        return $this;
    }

    public function render()
    {
        return $this->view;
    }
}