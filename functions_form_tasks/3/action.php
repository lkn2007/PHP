<?php

function handlerInput(string $name)
{
    $value = ($_POST[$name]);
    if (!is_numeric($value) || $value < 0 || !filter_var($value, FILTER_VALIDATE_INT)) {
        echo 'Введіть ціле число більше нуля';
        exit;
    }
    return $value;
}

function handlerFile(int $parameter)
{
    $filename = 'file.txt';
    if (!file_exists($filename)) {
        echo 'Помилка відкриття файлу';
        exit;
    }
    $arr_file = file($filename);
    $arr_word = [];
    foreach ($arr_file as $value) {
        $tmp = '';
        $word = strtok($value, " \n");
        while ($word) {
            if (iconv_strlen($word) <= $parameter) {
                $tmp .= $word . ' ';
            }
            $word = strtok(" \n");
        }
        if (strlen($tmp) != 0) {
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

$parameter = handlerInput("input");
handlerFile($parameter);
