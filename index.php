<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if (!file_exists(__DIR__.'/vendor/autoload.php')) {
    die('Composer autoload.php not found. Please run composer install.');
}

require __DIR__.'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer;
require __DIR__.'/app/init.php'; 
require_once "pro.php";

?>




