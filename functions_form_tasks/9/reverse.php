<?php

$post = htmlspecialchars($_POST['text']);
if (empty($_POST['text'])) {
    Header("Location: index.php");
    exit();
}

function reverse(string $str)
{
    $res = '';
    $len =  -mb_strlen($str);
    for ($i = -1; $i >= $len; --$i) {
        $res .= mb_substr($str, $i, 1);
    }
    return $res;
}

echo reverse($post);
