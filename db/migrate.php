<?php
$migrations_dir = __DIR__ . '/migrations';
$migration_files = glob($migrations_dir . '/*.php');

foreach ($migration_files as $file) {
    require_once $file;
    $function_name = 'migrate_' . basename($file, '.php');
    if (function_exists($function_name)) {
        $function_name();
    } else {
        echo "Migration function {$function_name} not found in {$file}.\n";
    }
}

