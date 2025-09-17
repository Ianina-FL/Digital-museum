<?php
require_once __DIR__ . '/../config.php';

function migrate_001_create_users_table() {
    try {
        $pdo = db();
        $sql = "
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
        $pdo->exec($sql);
        echo "Migration 001: Users table created successfully.\n";
    } catch (PDOException $e) {
        die("Migration 001 failed: " . $e->getMessage() . "\n");
    }
}

