<?php
# arrays_loops_tasks: Завдання №25
#
# Ваше завдання створити масив, наповнити його випадковими значеннями (функція rand),
# знайти максимальне і мінімальне значення і поміняти їх місцями.

$arr = [];
$length = 15;
for ($i = 1; $i <= $length; $i++) {
    $arr[$i] = rand(10, 99);
}

echo 'before: ';
foreach ($arr as $value) {
    echo $value . ' ';
}

$key_min = array_search(min($arr), $arr);
$key_max = array_search(max($arr), $arr);

$tmp = $arr[$key_min];
$arr[$key_min] = $arr[$key_max];
$arr[$key_max] = $tmp;

echo "\nafter:  ";
foreach ($arr as $value) {
    echo $value . ' ';
}
