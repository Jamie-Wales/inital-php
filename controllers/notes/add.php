<?php

require 'Validator.php';
$heading = 'create note';
$config = require "config.php";
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];



    if (!Validator::string($_POST['body'],1, 100)) {
        $errors['body'] = 'Invalid body';
    }


    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, userid) VALUES(:body, :userid)', [
            'body' => $_POST['body'],
            'userid' => 1
        ]);
    }
}

require 'views/notes/add-note.view.php';
