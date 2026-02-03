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

echo "<h3>Specific File Checks:</h3>";
$sql_files = ['schema.pg.sql', 'seed.pg.sql', 'closestar.sql'];
foreach ($sql_files as $sf) {
    echo "$sf: " . (file_exists(__DIR__.'/'.$sf) ? 'FOUND' : 'NOT FOUND') . "<br>";
}

echo "<h4>Directory Listing:</h4>";
$files = scandir(__DIR__);
echo "<pre>" . print_r($files, true) . "</pre>";


?>
