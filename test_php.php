<?php
require __DIR__.'/vendor/autoload.php';
$config = require __DIR__.'/app/config.php';

echo "PHP is working. Server time: " . date('Y-m-d H:i:s') . "<br>";
echo "CWD: " . getcwd() . "<br>";
echo "PATH constant (from config): " . (defined('PATH') ? PATH : 'NOT DEFINED') . "<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";

echo "<h4>Inspecting app/init.php:</h4>";
$init_file = __DIR__.'/app/init.php';
if (file_exists($init_file)) {
    $content = file_get_contents($init_file);
    echo "<pre>" . htmlspecialchars(substr($content, 0, 2000)) . "</pre>";
} else {
    echo "app/init.php NOT FOUND at $init_file";
}


?>
