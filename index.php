<?php
echo "DEBUG: index.php reached successfully.<br>";
require __DIR__.'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer;
require __DIR__.'/app/init.php'; 
require_once "pro.php";

?>




