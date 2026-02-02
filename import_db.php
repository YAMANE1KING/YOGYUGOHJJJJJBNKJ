<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__.'/app/init.php';

echo "<h3>Automatic Database Import</h3>";

$sqlFile = __DIR__.'/schema.pg.sql';

if (!file_exists($sqlFile)) {
    die("Error: schema.pg.sql not found at " . $sqlFile);
}

$sql = file_get_contents($sqlFile);

// Remove comments and split by semicolon
// Note: This is a simple splitter and might struggle with complex SQL, 
// but for a standard schema export it usually works.
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
        // Some errors like "table already exists" might be okay during a retry
        echo "<div style='color:orange'>Skipped/Error on query: " . substr($query, 0, 50) . "...<br>";
        echo "Reason: " . $e->getMessage() . "</div><br>";
        $errorCount++;
    }
}

echo "<h4>Import Finished!</h4>";
echo "Successfully executed: $successCount queries.<br>";
echo "Errors/Skips: $errorCount<br>";
echo "<br><a href='index.php'>Go to Homepage</a>";
?>
