<?php

$router->get("/", "controllers/index.php");
$router->get("/about",'controllers/about.php');
$router->get("/contact","controllers/contact.php");
$router->get("/notes","controllers/notes/index.php");
$router->get("/note","controllers/notes/show.php");
$router->post("/add-note","controllers/notes/store.php");
$router->get("/add-note", "controllers/notes/add.php");
$router->delete("/note", "controllers/notes/destroy.php");


   // '/contact' => 'controllers/contact.php',
    //'/notes' => 'controllers/notes/index.php',
    //'/note' => 'controllers/notes/show.php',
    //'/add-note' => 'controllers/notes/add.php';
