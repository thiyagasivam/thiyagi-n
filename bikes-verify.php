<?php
require_once __DIR__ . '/includes/db_bikes.php';

header('Content-Type: text/plain; charset=utf-8');

$seed = $_GET['seed'] ?? '';
if ($seed === 'keeway-v302-c') {
    $_GET['run'] = '1';
    require __DIR__ . '/seed_bike_keeway_v302c.php';
    exit;
}

if ($seed === 'qj-motor-srv-300') {
    $_GET['run'] = '1';
    require __DIR__ . '/seed_bike_srv300.php';
    exit;
}

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

    echo "\nTable row counts:\n";
    foreach ($expected as $table) {
        if (!in_array($table, $tables, true)) {
            echo '- ' . $table . ': n/a' . "\n";
            continue;
        }

        $countResult = $conn->query('SELECT COUNT(*) AS total_rows FROM ' . $table);
        $countRow = $countResult ? $countResult->fetch_assoc() : null;
        echo '- ' . $table . ': ' . (int)($countRow['total_rows'] ?? 0) . "\n";
    }

    echo "\nBike model summary:\n";
    $summarySql = "
        SELECT
            bm.id,
            bb.name AS brand_name,
            bm.model_name,
            bm.slug,
            (SELECT COUNT(*) FROM bike_highlights bh WHERE bh.model_id = bm.id) AS highlights_count,
            (SELECT COUNT(*) FROM bike_key_features bkf WHERE bkf.model_id = bm.id) AS key_features_count,
            (SELECT COUNT(*) FROM bike_variants bv WHERE bv.model_id = bm.id) AS variants_count,
            (SELECT COUNT(*) FROM bike_colors bc WHERE bc.model_id = bm.id) AS colors_count,
            (SELECT COUNT(*) FROM bike_specs bs WHERE bs.model_id = bm.id) AS specs_count,
            (SELECT COUNT(*) FROM bike_source_snapshots bss WHERE bss.model_id = bm.id) AS snapshots_count
        FROM bike_models bm
        INNER JOIN bike_brands bb ON bb.id = bm.brand_id
        ORDER BY bm.id ASC
    ";

    $summaryResult = $conn->query($summarySql);
    if ($summaryResult && $summaryResult->num_rows > 0) {
        while ($row = $summaryResult->fetch_assoc()) {
            echo '- #' . (int)$row['id']
                . ' ' . $row['brand_name'] . ' ' . $row['model_name']
                . ' (' . $row['slug'] . ')'
                . ' | highlights=' . (int)$row['highlights_count']
                . ', key_features=' . (int)$row['key_features_count']
                . ', variants=' . (int)$row['variants_count']
                . ', colors=' . (int)$row['colors_count']
                . ', specs=' . (int)$row['specs_count']
                . ', snapshots=' . (int)$row['snapshots_count']
                . "\n";
        }
    } else {
        echo "- No rows in bike_models yet.\n";
    }

    $conn->close();
} catch (Throwable $e) {
    echo 'Verification failed: ' . $e->getMessage() . "\n";
}
