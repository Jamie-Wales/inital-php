<?php

$config = require "config.php";
$db = new Database($config['database']);

$notes = $db->query("SELECT * FROM notes where userid=?", ["1"])->find();
$heading = "My notes";


require "views/notes/notes.view.php";

