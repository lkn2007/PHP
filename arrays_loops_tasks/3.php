<?php
# arrays_loops_tasks: Завдання №3
#
# Дано масив з єлементами 26, 17, 136, 12, 79, 15. 
# За допомогою цикла foreach найдіть суму квадратів єлементів цього масиву.
# Запишіть її в зміну $result.

$array = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($array as $value) {
    $result += $value ** 2;
}