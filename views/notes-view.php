<?php
require('components/header.php');
require('components/content.php');

?>

<div>
    <h1 class="text-2xl text-bold">Your Notes:</h1>
    <ul>
        <?php foreach ($notes as $note): ?>
            <li><?= $note['header'] ?> - <?= $note['body'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>