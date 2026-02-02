<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', $_ENV['SITE_URL'] ?? 'http://localhost:8000');
define('STYLESHEETS_URL', $_ENV['SITE_URL'] ?? 'http://localhost:8000');

error_reporting(E_ALL);
ini_set('display_errors', 1); // Show errors for debugging
date_default_timezone_set('Asia/Kolkata'); // Consider making this configurable too

return [
  'db' => [
    'name'    =>  $_ENV['DB_NAME'] ?? 'smmsimba',
    'host'    =>  $_ENV['DB_HOST'] ?? 'localhost',
    'user'    =>  $_ENV['DB_USER'] ?? 'postgres',
    'pass'    =>  $_ENV['DB_PASS'] ?? 'password',
    'port'    =>  $_ENV['DB_PORT'] ?? '5432',
    'charset' =>  $_ENV['DB_CHARSET'] ?? 'utf8' 
  ]
];
