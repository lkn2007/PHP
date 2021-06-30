<?php

function handlerTextarea(string $name)
{
    $word = trim(strtok($_POST[$name], " \n"));
    $arr_word = [];
    while ($word) {
        $arr_word[] = trim($word);
        $word = strtok(" \n");
    }
    return $arr_word;
}

function myCompare(string $a, string $b)
{
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) > strlen($b)) ? 1 : -1;
}

function getTopLongWords(array $words)
{
    usort($words, 'myCompare');
    return array_slice($words, -3);
}

function printTopLongWords(array $input)
{
    echo '<b>ТОП 3 найдовших слів:</b><br><br>';
    foreach ($input as $value) {
        echo $value . ' ';
    }
}

$temp = handlerTextarea('textarea');
$result = getTopLongWords($temp);
printTopLongWords($result);
