<?php
function printPost()
{
    $file = "post.txt";
    $arr_post = file($file);
    foreach ($arr_post as $value) {
        echo htmlspecialchars($value) . "<br>";
    }
}
