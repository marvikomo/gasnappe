<?php

return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => DEBUG_MODE,
        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../../resources/views',
            'twig' => [
                'cache' => __DIR__ . '/../../cache/twig',
                'debug' => DEBUG_MODE,
            ],
        ],
        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../../log/app.log',
        ],
        //Db Config
        'db' => [
            'driver' => 'mysql',
            'host' => DB_HOST,
            'username' => DB_USERNAME,
            'password' => DB_PASSWORD,
            'database' => DB_NAME,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],
];