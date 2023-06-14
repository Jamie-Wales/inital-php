<?php

use core\Database;

$config = require basePath("config.php");
$db = new Database($config['database']);
$id = $_POST['id'];
$note = $db->query("SELECT * FROM notes where id=?", [$id])->findOrFail();
$currentUserId = 1;
$db->query("DELETE FROM notes WHERE id = :id", ["id" => $note[0]['id']]);
header("location: /notes");
die();