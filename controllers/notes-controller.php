<?php
require "config.php";
$header = "Notes";
$content = "Welcome to the notes view";

$db = new Database($db_config['host'], $db_config['db'], $db_config['user'], $db_config['pass'], $db_config['port']);

// If user is not logged in || login
/* if(true){
    require "views/login-view.php";
} */
// If user is not logged in || register

// If user is logged in
// Fetch all notes of the users


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    

    $db->query(
        'INSERT INTO notes(header,body,user_id) VALUES(:body, :header, :user_id)',
        [
            'header' => $_POST['header'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]
    );
}


$notes = $db->query("SELECT * FROM notes WHERE user_id = 1");

require "views/notes-view.php";
