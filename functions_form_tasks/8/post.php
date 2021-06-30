<?php

$post = $_POST['text'];

if (empty($_POST['text'])) {
    Header("Location: index.php");
    exit();
}

$file = "post.txt";
$date = date('(d.m.Y H:i:s)');
$dictionary = "dictionary.txt";

$tmp = trim(strtok($post, " "));
while ($tmp) {
    $post_data[] = trim($tmp);
    $tmp = strtok(" ");
}

$dictionary_data = file($dictionary, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$res = array_diff($post_data, $dictionary_data);
if (count($post_data) !== count($res)) {
    $res = [];
    $res[] = "Некоректний коментар";
}

$f = fopen($file, "a");
fwrite($f,  $date . ' ' .  strip_tags(implode(' ', $res), '<b>') . "\n");
fclose($f);

Header("Location: index.php");
