<?php

declare(strict_types=1);

namespace App;

/**
 * Main Application Class
 * 
 * This is the core application class that bootstraps your PHP application.
 */
class App
{
    /**
     * Application version
     */
    private const VERSION = '1.0.0';

    /**
     * Application configuration
     *
     * @var array
     */
    private array $config;

    /**
     * Constructor
     *
     * @param array $config Application configuration
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Run the application
     *
     * @return void
     */
    public function run(): void
    {
        echo "PHP Application is running! (v" . self::VERSION . ")\n";
    }

    /**
     * Get application version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return self::VERSION;
    }

    /**
     * Get configuration value
     *
     * @param string $key Configuration key
     * @param mixed $default Default value if key not found
     * @return mixed
     */
    public function getConfig(string $key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }
}
