<?php
# arrays_loops_tasks: Завдання №13
#
# Виведіть таблицю множення.

$a = 1;
$b = 1;
while ($a <= 10) {
    if ($b <= 10) {
        echo $a . ' * ' . $b . ' = ' . $a * $b . "<br>\n";
        $b++;
    } else {
        $a++;
        $b = 1;
    }
}
