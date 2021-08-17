<?php

function getFiles($path): array
{
    $tmp = scandir($path);
    $files = [];
    $length = count($tmp);
    for ($i = 0; $i < $length; $i++) {
        if (!is_dir($path . $tmp[$i])) {
            $files[] = $tmp[$i];
        }
    }
    return $files;
}

function showFiles(): void
{
    $path = 'gallery';
    foreach (getFiles($path) as $file) {
        echo '<tr align="center"><td><img src="' . $path . '/' . $file . '" width="80%" height="50%"/></td></tr>';
    }
}
