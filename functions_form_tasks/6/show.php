<?php

function getFiles($path)
{
    clearstatcache();
    $files = scandir($path);
    for ($i = 0, $length = count($files); $i < $length; $i++) {
        if (is_dir($path . $files[$i])) {
            unset($files[$i]);
        }
    }
    return $files;
}

function showFiles()
{
    $path = 'gallery/';
    foreach (getFiles($path) as $file) {
        echo '<tr align="center"><td><img src="' . $path . $file . '" width="80%" height="50%"/></td></tr>';
    }
}
