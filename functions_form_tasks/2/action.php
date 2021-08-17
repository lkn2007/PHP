<?php

function handlerTextarea(string $name): array
{
    if (empty($_POST[$name])) {
        Header("Location: form.html");
        exit();
    }
    return explode(' ', trim(htmlspecialchars($_POST[$name])));
}

function myCompare(string $a, string $b): int
{
    return (strlen(trim($a)) - strlen(trim($b)));
}

function getTopLongWords(array $words): array
{
    usort($words, 'myCompare');
    return array_slice($words, -3);
}

function printTopLongWords(array $input): void
{
    echo '<b>ТОП 3 найдовших слів:</b><br><br>';
    foreach ($input as $value) {
        echo $value . ' ';
    }
}

$result = getTopLongWords(handlerTextarea('textarea'));
printTopLongWords($result);
