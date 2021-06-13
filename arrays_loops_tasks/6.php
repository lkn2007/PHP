<?php
# arrays_loops_tasks: Завдання №6
#
# Дано масив $arr. За допомогою цикла foreach запишіть англійські назви в масив $en,
# а Українські - в масив $ua.
# $arr = array('green' => 'зелений', 'red' => 'червоний', 'blue' => 'синій');
# $en = array('green', 'red', 'blue');
# $ua = array('зелений', 'червоний', 'синій');

$arr = [
    'green' => 'зелений',
    'red' => 'червоний',
    'blue' => 'синій',
];
$en = [];
$ua = [];

foreach ($arr as $key => $value) {
    $en[] = $key;
    $ua[] = $value;
}
