<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=laravel_technoweb', 'root', '');
    $stmt = $pdo->query('SELECT id, slug, content FROM blogs');
    foreach ($stmt as $row) {
        echo 'ID: ' . $row['id'] . ' | Slug: ' . $row['slug'] . PHP_EOL;
        echo 'Content: ' . (empty($row['content']) ? '(EMPTY)' : substr($row['content'], 0, 200)) . PHP_EOL . PHP_EOL;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
