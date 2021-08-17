<?php

$post = trim(htmlspecialchars($_POST['text']));

if (empty($_POST['text'])) {
    Header("Location: index.php");
    exit();
}

function reverse(string $string): string
{
    $arr = mb_str_split($string);
    $res = '';
    foreach ($arr as $value) {
        $res = $value . $res;
    }
    return $res;
}

echo reverse($post);
