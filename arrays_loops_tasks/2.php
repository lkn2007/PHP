<?php
# arrays_loops_tasks: Завдання №2
#
# Дано масив з єлементами 1, 20, 15, 17, 24, 35. 
# За допомогою цикла foreach найдіть суму єлементів цього масиву.
# Запишіть її в зміну $result.

$array = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($array as $value) {
    $result += $value;
}
