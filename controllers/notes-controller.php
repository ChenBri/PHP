<?php

require "config.php";
require "Validator.php";

$header = "Notes";
$content = "Welcome to the notes view";

$db = new Database($db_config['host'], $db_config['db'], $db_config['user'], $db_config['pass'], $db_config['port']);


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if (Validator::string($_POST['header'])) {
        $errors['header'] = "Not a valid header";
    }
    
    if (Validator::string($_POST['body'])) {
        $errors['body'] = "Not a valid body";
    }

    if (empty($errors)) {
        $db->query(
            'INSERT INTO notes(header,body,user_id) VALUES(:body, :header, :user_id)',
            [
                'header' => $_POST['header'],
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );
        
    }
}

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1", [], Database::FETCH_ALL);

require "views/notes-view.php";
