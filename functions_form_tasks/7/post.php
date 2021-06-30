<?php

$post = htmlspecialchars($_POST['text']);
$file = "post.txt";
$date = date('(d.m.Y H:i:s)');
if (!empty($_POST['text'])) {
    $f = fopen($file, "a");
    fwrite($f,  $date . ' ' .  $post . "\n");
    fclose($f);
}

Header("Location: index.php");
