<?php
require_once __DIR__ . '/includes/db_bikes.php';

header('Content-Type: text/plain; charset=utf-8');

try {
    $conn = getBikesDbConnection();
    $dbResult = $conn->query('SELECT DATABASE() AS db_name');
    $dbRow = $dbResult ? $dbResult->fetch_assoc() : null;

    echo "Bikes DB connection: OK\n";
    echo 'Active database: ' . ($dbRow['db_name'] ?? 'unknown') . "\n\n";

    $expected = [
        'bike_brands',
        'bike_models',
        'bike_highlights',
        'bike_key_features',
        'bike_variants',
        'bike_colors',
        'bike_specs',
        'bike_source_snapshots',
    ];

    $tables = [];
    $result = $conn->query('SHOW TABLES');
    if ($result) {
        while ($row = $result->fetch_row()) {
            $tables[] = $row[0];
        }
    }

    echo "Tables found:\n";
    foreach ($tables as $table) {
        echo '- ' . $table . "\n";
    }

    echo "\nExpected table status:\n";
    foreach ($expected as $table) {
        echo '- ' . $table . ': ' . (in_array($table, $tables, true) ? 'OK' : 'MISSING') . "\n";
    }

    $conn->close();
} catch (Throwable $e) {
    echo 'Verification failed: ' . $e->getMessage() . "\n";
}
