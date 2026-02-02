<?php
error_reporting(0);
ini_set('display_errors', 0);

require __DIR__.'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer;
require __DIR__.'/app/init.php'; 
require_once "pro.php";
?>