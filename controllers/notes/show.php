<?php

use core\Database;

$config = require basePath("config.php");
$db = new Database($config['database']);
$id = $_GET['id'];
$note = $db->query("SELECT * FROM notes where id=?", [$id])->findOrFail();
$currentUserId = 1;


if ($note[0]['userid'] !== $currentUserId) {
    abort('403');
}

view("notes/show.view.php", [
    "heading" => htmlspecialchars($note[0]['body']),
    'note' => $note ]);

