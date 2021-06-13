<?php
# arrays_loops_tasks: Завдання №4
#
# Дано масив $arr. За допомогою першого циклу foreach  виведіть на єкран стовпчик ключей,
# за допомогою другого - стовпчик єлементів.
# $arr = array('green' => 'зелений', 'red' => 'червоний', 'blue' => 'синій');

$arr = [
    'green' => 'зелений',
    'red' => 'червоний',
    'blue' => 'синій'
];

foreach ($arr as $key => $value) {
    echo $key . "\n";
}
foreach ($arr as $key => $value) {
    echo $value  . "\n";
}
