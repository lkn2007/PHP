<?php
# arrays_loops_tasks: Завдання №8
#
# Дано масив з єлементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
# За допомогою цикла foreach створіть строку '123456789'.

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = '';
foreach ($arr as $value) {
    $str .= $value;
}
