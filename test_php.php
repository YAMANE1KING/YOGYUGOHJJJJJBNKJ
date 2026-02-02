<?php
require __DIR__.'/vendor/autoload.php';
$config = require __DIR__.'/app/config.php';

echo "PHP is working. Server time: " . date('Y-m-d H:i:s') . "<br>";
echo "CWD: " . getcwd() . "<br>";
echo "PATH constant (from config): " . (defined('PATH') ? PATH : 'NOT DEFINED') . "<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "<br>";

?>
