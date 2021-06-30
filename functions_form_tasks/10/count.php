<?php

$post = htmlspecialchars($_POST['text']);
if (empty($_POST['text'])) {
    Header("Location: index.php");
    exit();
}

$res = array_unique(explode(' ', $post));
echo 'Кількість унікальних слів - ' . count($res);
