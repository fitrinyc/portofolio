<?php

$dirs = [
    '/tmp/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Tangkap error asli dari Laravel
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<pre>";
    echo "ERROR: " . $e->getMessage() . "\n\n";
    echo "FILE: " . $e->getFile() . ":" . $e->getLine() . "\n\n";
    echo $e->getTraceAsString();
    echo "</pre>";
}