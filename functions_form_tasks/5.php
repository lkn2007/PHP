<?php
# functions_form_tasks: Завдання №5 
#
# Написати функцію, яка виводить список файлів в заданій директорії, які містять шукане слово.
# Директорія і шукане слово задаються як параметр функції.

function getFile(string $path, string $template)
{
    $all = scandir($path);
    foreach ($all as $value) {
        if (!is_dir($path . $value) && strpos($value, $template)) {
            echo $value . "\n";
        }
    }
}
getFile('D:/', 'jpg');
