<?php

// Debug: cek apakah file-file ada
echo "<pre>";
echo "PHP version: " . phpversion() . "\n";
echo "public/index.php exists: " . (file_exists(__DIR__ . '/../public/index.php') ? 'YES' : 'NO') . "\n";
echo "vendor/autoload.php exists: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'YES' : 'NO') . "\n";
echo "bootstrap/app.php exists: " . (file_exists(__DIR__ . '/../bootstrap/app.php') ? 'YES' : 'NO') . "\n";
echo "/tmp writable: " . (is_writable('/tmp') ? 'YES' : 'NO') . "\n";

// Coba buat folder
mkdir('/tmp/views', 0755, true);
echo "/tmp/views created: " . (is_dir('/tmp/views') ? 'YES' : 'NO') . "\n";

// Cek env
echo "APP_KEY set: " . (isset($_ENV['APP_KEY']) ? 'YES' : 'NO') . "\n";
echo "APP_DEBUG: " . ($_ENV['APP_DEBUG'] ?? 'not set') . "\n";
echo "</pre>";