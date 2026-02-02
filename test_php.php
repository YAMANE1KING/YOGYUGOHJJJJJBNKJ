<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo "OPcache reset successfully.<br>";
}

require __DIR__.'/vendor/autoload.php';
$config = require __DIR__.'/app/config.php';

echo "PHP is working. Server time: " . date('Y-m-d H:i:s') . "<br>";
echo "CWD: " . getcwd() . "<br>";
echo "PATH constant (from config): " . (defined('PATH') ? PATH : 'NOT DEFINED') . "<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";

echo "<h4>Inspecting pro.php:</h4>";
$pro_file = __DIR__.'/pro.php';
if (file_exists($pro_file)) {
    $content = file_get_contents($pro_file);
    echo "<pre>" . htmlspecialchars(substr($content, 0, 10000)) . "</pre>";
} else {
    echo "pro.php NOT FOUND at $pro_file";
}


?>
