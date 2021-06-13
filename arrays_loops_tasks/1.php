<?php
# arrays_loops_tasks: Завдання №1 
#
# Дано масив з єлементами 'html', 'css', 'php', 'js', 'jq'. 
# За допомогою цикла foreach виведіть ці слова в стопчик.

$array = ['html', 'css', 'php', 'js', 'jq'];

foreach ($array as $value) {
    echo $value . "\n";
}
