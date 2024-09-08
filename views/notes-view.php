<?php
require('components/header.php');
require('components/content.php');

?>

<div>
    <h2>Add a new note:</h2>
    <form method="POST">
        <label for="header">Header</label>
        <input type="text" name="header" placeholder="Note's Header" />
        <label for="Body">Body</label>
        <input type="text" name="body" placeholder="Body's Header" />

        <button type="submit">Submit</button>
    </form>

    <br />
    <h2 class="text-2xl text-bold">Your Notes:</h2>
    <ul>
        <?php foreach ($notes as $note): ?>
            <li><?= $note['header'] ?> - <?= $note['body'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>