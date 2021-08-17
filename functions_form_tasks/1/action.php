<?php

function handlerTextArea($name): array
{
    if (empty($_POST[$name])) {
        Header("Location: form.html");
        exit();
    }
    return explode(' ', trim(htmlspecialchars($_POST[$name])));
}

function handlerTextAreaReg($name): array
{
    if (empty($_POST[$name])) {
        Header("Location: form.html");
        exit();
    }
    return preg_split("/[\s,]+/", trim(htmlspecialchars($_POST[$name])));
}

function getCommonWords($a, $b): array
{
    return array_intersect($a, $b);
}
function printCommonWords($input): void
{
    echo '<b>Загальні слова:</b><br>';
    foreach ($input as $value) {
        echo $value . '<br>';
    }
}
$arr_word_1 = handlerTextAreaReg('textarea_1');
$arr_word_2 = handlerTextAreaReg('textarea_2');
//$arr_word_1 = handlerTextArea('textarea_1');
//$arr_word_2 = handlerTextArea('textarea_2');

printCommonWords(getCommonWords($arr_word_1, $arr_word_2));
