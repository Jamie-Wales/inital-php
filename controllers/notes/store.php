<?php


use core\Database;
use core\Validator;

$config = require basePath("config.php");
$db = new Database($config['database']);
$errors = [];

if (!Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'Invalid body';
}

if (empty($errors)) {
    $db->query('INSERT INTO notes(body, userid) VALUES(:body, :userid)', [
        'body' => $_POST['body'],
        'userid' => 1
    ]);

    header("location: /notes");
    die();
} else {
    view("notes/create.view.php", ["heading" => "Home",
        'errors' => $errors]);
}

