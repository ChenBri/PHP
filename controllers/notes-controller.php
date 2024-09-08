<?php
require "config.php";
$header = "Notes";
$content = "Welcome to the notes view";

$db = new Database($db_config['host'], $db_config['db'], $db_config['user'], $db_config['pass'], $db_config['port']);


$notes = $db->query("SELECT * FROM notes WHERE user_id = 1");
// If user is not logged in || login

// If user is not logged in || register

// If user is logged in
// Fetch all notes of the users

require "views/notes-view.php";


