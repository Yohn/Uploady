<?php

// Database Settings
define("DB_HOST", "localhost");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_NAME", "");

// Application Settings
define("SITE_URL", ""); // Example: http://localhost/uploady
define("APP_PATH", dirname(__FILE__, 2) . DIRECTORY_SEPARATOR); // ( Don't Change );
define("LOGS_PATH", APP_PATH . "php_logs.log"); // ( Don't Change );

// Upload Settings
define("MAX_SIZE", "1 GB");
define("UPLOAD_FOLDER", "uploads");

// Environment Settings
require_once 'environment.php';

// Autoload Composer
require_once APP_PATH . 'vendor/autoload.php';
