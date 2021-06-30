<?php

function handlerTextArea($name)
{
    $word = trim(strtok($_POST[$name], " \n"));
    $arr_word = [];
    while ($word) {
        $arr_word[] = trim($word);
        $word = strtok(" \n");
    }
    return $arr_word;
}

function getCommonWords($a, $b)
{
    return array_intersect($a, $b);
}

function printCommonWords($input)
{
    echo '<b>Загальні слова:</b><br>';
    foreach ($input as $value) {
        echo $value . '<br>';
    }
}

$arr_word_1 = handlerTextArea('textarea_1');
$arr_word_2 = handlerTextArea('textarea_2');

printCommonWords(getCommonWords($arr_word_1, $arr_word_2));
