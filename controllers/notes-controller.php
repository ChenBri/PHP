<?php

$header = "Notes";
$content = "Welcome to the notes view";


$result = $db->query('SELECT * FROM notes WHERE user_id = ?');
dd($result);


require "views/notes-view.php";


