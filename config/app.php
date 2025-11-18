<?php

declare(strict_types=1);

/**
 * Application Configuration
 * 
 * This file contains the main configuration settings for the application.
 */

return [
    'app' => [
        'name' => 'PHP Project Template',
        'env' => getenv('APP_ENV') ?: 'development',
        'debug' => getenv('APP_DEBUG') ?: true,
        'url' => getenv('APP_URL') ?: 'http://localhost:8000',
    ],

    'database' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'port' => getenv('DB_PORT') ?: 3306,
        'database' => getenv('DB_DATABASE') ?: 'app',
        'username' => getenv('DB_USERNAME') ?: 'root',
        'password' => getenv('DB_PASSWORD') ?: '',
        'charset' => 'utf8mb4',
    ],

    'paths' => [
        'root' => dirname(__DIR__),
        'public' => dirname(__DIR__) . '/public',
        'src' => dirname(__DIR__) . '/src',
        'config' => __DIR__,
        'cache' => dirname(__DIR__) . '/cache',
        'logs' => dirname(__DIR__) . '/logs',
    ],
];
