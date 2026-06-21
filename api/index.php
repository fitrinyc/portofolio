<?php

$dirs = [
    '/tmp/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) mkdir($dir, 0755, true);
}

// Tangkap semua error termasuk yang di-swallow
set_exception_handler(function(\Throwable $e) {
    echo "<pre style='background:#fff;color:#000;padding:20px;'>";
    echo "ORIGINAL ERROR: " . get_class($e) . "\n";
    echo "MESSAGE: " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . ":" . $e->getLine() . "\n";
    if ($e->getPrevious()) {
        echo "\nCAUSED BY: " . $e->getPrevious()->getMessage() . "\n";
        echo "IN: " . $e->getPrevious()->getFile() . ":" . $e->getPrevious()->getLine() . "\n";
    }
    echo "</pre>";
});

require __DIR__ . '/../public/index.php';