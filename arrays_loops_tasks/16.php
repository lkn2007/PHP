<?php
# arrays_loops_tasks: Завдання №16
#
# Дано масив з єлементами 1, 2, 3, 4, 5, 6, 7, 8, 9. За допомогою цикла foreach
# и оператора if видедіть на єкран стовпчик єлементів масиву як показано на малюнку.
# 
#  1, 2, 3
#  4, 5, 6
#  7, 8, 9.

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
    if ($value % 3 === 0) {
        echo $value . "\n";
    } else {
        echo $value . ',';
    }
}
