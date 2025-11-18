<?php

declare(strict_types=1);

/**
 * Application Entry Point
 * 
 * This file serves as the public entry point for the application.
 */

// Load Composer's autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables
if (file_exists(__DIR__ . '/../.env')) {
    // If you're using a dotenv library, load it here
    // For example: $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    // $dotenv->load();
}

// Create and run the application
use App\App;

$app = new App([
    'env' => 'development',
    'debug' => true,
]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project Template</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 20px;
            padding: 60px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        .emoji {
            font-size: 4em;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .version {
            color: #667eea;
            font-weight: bold;
            margin-top: 30px;
            font-size: 0.9em;
        }
        .links {
            margin-top: 30px;
        }
        .links a {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
        }
        .links a:hover {
            background: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">🚀</div>
        <h1>Welcome to PHP!</h1>
        <p>Your PHP project template is successfully set up and running.</p>
        <p>Edit <code>public/index.php</code> to get started.</p>
        <div class="version">Version: <?php echo htmlspecialchars($app->getVersion()); ?></div>
        <div class="links">
            <a href="https://github.com/trisindopanji/trisindopanji" target="_blank">View on GitHub</a>
            <a href="https://www.php.net/docs.php" target="_blank">PHP Docs</a>
        </div>
    </div>
</body>
</html>
