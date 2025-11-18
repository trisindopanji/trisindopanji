<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\App;

/**
 * Test case for the App class
 */
class AppTest extends TestCase
{
    /**
     * Test that the app can be instantiated
     */
    public function testAppCanBeInstantiated(): void
    {
        $app = new App();
        $this->assertInstanceOf(App::class, $app);
    }

    /**
     * Test that the version is returned correctly
     */
    public function testGetVersion(): void
    {
        $app = new App();
        $this->assertIsString($app->getVersion());
        $this->assertNotEmpty($app->getVersion());
    }

    /**
     * Test configuration handling
     */
    public function testGetConfig(): void
    {
        $config = ['test_key' => 'test_value'];
        $app = new App($config);
        
        $this->assertEquals('test_value', $app->getConfig('test_key'));
        $this->assertNull($app->getConfig('non_existent_key'));
        $this->assertEquals('default', $app->getConfig('non_existent_key', 'default'));
    }

    /**
     * Test that run method works without errors
     */
    public function testRun(): void
    {
        $app = new App();
        
        // Capture output
        ob_start();
        $app->run();
        $output = ob_get_clean();
        
        $this->assertStringContainsString('PHP Application is running!', $output);
    }
}
