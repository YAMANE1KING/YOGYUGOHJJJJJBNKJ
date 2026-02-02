<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = [
    'host' => getenv('DB_HOST') ?: 'localhost',
    'name' => getenv('DB_NAME') ?: 'smmsimba',
    'user' => getenv('DB_USER') ?: 'postgres',
    'pass' => getenv('DB_PASS') ?: 'password',
    'port' => getenv('DB_PORT') ?: '5432',
];

echo "<h3>Database Connection Test</h3>";
echo "Attempting to connect to: " . $config['host'] . "<br>";

try {
    $db_options = "options='--client_encoding=UTF8'";
    if (getenv('DB_SSL') == 'true') {
        $db_options .= ";sslmode=require";
        echo "SSL Mode: Enabled (require)<br>";
    } else {
        echo "SSL Mode: Disabled<br>";
    }

    $dsn = "pgsql:host={$config['host']};port={$config['port']};dbname={$config['name']};{$db_options}";
    
    $start = microtime(true);
    $conn = new PDO($dsn, $config['user'], $config['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 5
    ]);
    $end = microtime(true);
    
    echo "<b style='color:green'>SUCCESS: Connected to database in " . round($end - $start, 3) . "s</b><br>";
    
    // Check if tables exist
    $query = $conn->query("SELECT tablename FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema'");
    $tables = $query->fetchAll(PDO::FETCH_COLUMN);
    
    if (count($tables) > 0) {
        echo "Tables found: " . implode(", ", $tables);
    } else {
        echo "<b style='color:orange'>WARNING: Connection successful but NO TABLES FOUND. Did you import the SQL?</b>";
    }

} catch (PDOException $e) {
    echo "<b style='color:red'>ERROR: Connection failed!</b><br>";
    echo "Message: " . $e->getMessage();
}
?>
