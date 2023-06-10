<?php

$config = require "config.php";


$db = new Database($config['database']);

$id = $_GET['id'];
$note = $db->query("SELECT * FROM notes where id=?", $id)->findOrFail();

$currentUserId = 1;


if ($note[0]['userid'] !== $currentUserId) {
    abort('403');
}

$heading = $note[0]['body'];
require "views/note.view.php";

