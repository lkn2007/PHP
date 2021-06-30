<?php
# functions_form_tasks: Завдання №4 
#
# Написати функцію, яка виводить список файлів в заданій директорії.
# Директорія задається як параметр функції.

function getFile(string $path)
{
    $all = scandir($path);
    foreach ($all as $value) {
        if (!is_dir($path . $value)) {
            echo $value . "\n";
        }
    }
}
getFile('D:/');
