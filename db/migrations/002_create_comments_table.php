<?php
require_once __DIR__ . '/../config.php';

function migrate_002_create_comments_table() {
    try {
        $pdo = db();
        $sql = "
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
        $pdo->exec($sql);
        echo "Migration 002: Comments table created successfully.\n";
    } catch (PDOException $e) {
        die("Migration 002 failed: " . $e->getMessage() . "\n");
    }
}

