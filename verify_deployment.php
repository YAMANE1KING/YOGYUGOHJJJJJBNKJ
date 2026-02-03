<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Deployment Verification Script</h2>";
echo "Current Time: " . date('Y-m-d H:i:s') . "<br>";
echo "Build Time: " . (getenv('REBUILD_TIME') ?: 'N/A') . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Current Directory: " . __DIR__ . "<br>";

echo "<h3>Directory Listing:</h3>";
$files = scandir(__DIR__);
echo "<pre>" . print_r($files, true) . "</pre>";

echo "<h3>File Versions & Markers:</h3>";

$check_files = ['index.php', 'pro.php', 'app/init.php', 'app/controller/auth.php'];

foreach ($check_files as $f) {
    if (file_exists(__DIR__.'/'.$f)) {
        $content = file_get_contents(__DIR__.'/'.$f);
        $first_line = strtok($content, "\n");
        echo "<b>$f:</b> " . htmlspecialchars($first_line) . "<br>";
        if (strpos($content, 'BUILD MARKER') !== false) {
             preg_match('/BUILD MARKER: .*/', $content, $matches);
             echo "&nbsp;&nbsp;Marker found: " . ($matches[0] ?? 'N/A') . "<br>";
        }
    } else {
        echo "<b>$f:</b> <span style='color:red;'>NOT FOUND</span><br>";
    }
}

echo "<h3>OPcache Status:</h3>";
if (function_exists('opcache_get_status')) {
    $status = opcache_get_status();
    echo "OPcache is enabled: " . ($status['opcache_enabled'] ? 'Yes' : 'No') . "<br>";
    if (isset($status['scripts'])) {
        echo "Cached scripts count: " . count($status['scripts']) . "<br>";
    }
} else {
    echo "OPcache extension not loaded.<br>";
}

if (isset($_GET['reset_cache'])) {
    if (function_exists('opcache_reset')) {
        opcache_reset();
        echo "<b style='color:green'>OPcache has been reset!</b><br>";
    }
}

echo "<br><a href='?reset_cache=1'>Force OPcache Reset</a> | <a href='index.php'>Go to Homepage</a>";
?>
