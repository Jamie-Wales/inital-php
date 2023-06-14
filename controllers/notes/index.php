<?php

use core\Database;

$config = require basePath( "config.php");
$db = new Database($config['database']);

$notes = $db->query("SELECT * FROM notes where userid=?", ["1"])->find();

view("notes/index.view.php", ["heading" => "Home",
    'notes' => $notes]);

