<?php

function handlerInput(string $name): string
{
    if (empty($_POST[$name])) {
        Header("Location: form.html");
        exit();
    }
    $value = trim(htmlspecialchars(($_POST[$name])));
    if (!is_numeric($value) || +$value <= 0 || !is_int(+$value)) {
        echo 'Введіть ціле число більше нуля';
        exit();
    }
    return $value;
}

function handlerFile(int $parameter): void
{
    $filename = 'file.txt';
    if (!file_exists($filename)) {
        echo 'Помилка відкриття файлу';
        exit();
    }
    $arr_file = file($filename);
    $arr_word = [];
    foreach ($arr_file as $value) {
        $tmp = '';
        $word = strtok($value, " \n");
        while ($word) {
            if (mb_strlen($word) <= $parameter) {
                $tmp .= $word . ' ';
            }
            $word = strtok(" \n");
        }
        if (mb_strlen($tmp) != 0) {
            $arr_word[] = trim($tmp);
        }
    }
    $handler = fopen($filename, "w");
    foreach ($arr_word as $value) {
        echo $value . "<br>";
        fwrite($handler, $value . PHP_EOL);
    }
    fclose($handler);
}

handlerFile(handlerInput("input"));
