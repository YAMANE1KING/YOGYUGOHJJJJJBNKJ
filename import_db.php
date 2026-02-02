<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// require __DIR__.'/app/init.php'; // Removed because init.php crashes if tables don't exist

$db_host = getenv('DB_HOST') ?: 'localhost';
$db_name = getenv('DB_NAME') ?: 'smmsimba';
$db_user = getenv('DB_USER') ?: 'postgres';
$db_pass = getenv('DB_PASS') ?: 'password';
$db_port = getenv('DB_PORT') ?: '5432';

$db_options = "options='--client_encoding=UTF8'";
if (getenv('DB_SSL') == 'true') {
    $db_options .= ";sslmode=require";
}

try {
    $dsn = "pgsql:host=$db_host;port=$db_port;dbname=$db_name;$db_options";
    $conn = new PDO($dsn, $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


echo "<h3>Automatic Database Import & Seeding</h3>";

$files = [
    'Schema' => __DIR__.'/schema.pg.sql',
    'Seed'   => __DIR__.'/seed.pg.sql'
];

foreach ($files as $name => $sqlFile) {
    if (!file_exists($sqlFile)) {
        echo "<div style='color:red'>Error: $sqlFile not found. Skipping $name.</div><br>";
        continue;
    }

    echo "<h4>Importing $name...</h4>";
    $sql = file_get_contents($sqlFile);
    $queries = explode(';', $sql);

    $successCount = 0;
    $errorCount = 0;

    foreach ($queries as $query) {
        $query = trim($query);
        if (empty($query)) continue;
        
        try {
            $conn->exec($query);
            $successCount++;
        } catch (PDOException $e) {
            // Some errors like "table already exists" or "duplicate key" might be okay
            $errorCount++;
        }
    }

    echo "Finished $name. Success: $successCount, Failed/Skipped: $errorCount<br>";
}

echo "<h4>All Imports Finished!</h4>";
echo "<br><a href='index.php'>Go to Homepage</a>";
?>
