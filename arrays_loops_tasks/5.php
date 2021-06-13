<?php
# arrays_loops_tasks: Завдання №5
#
# Дано масив $arr з ключами 'Коля', 'Вася', 'Петя' з єлементами '200', '300', '400'.
# За допомогою цикла foreach виведіть на єкран стовбчик рядків такого формату:
# 'Коля - зарплата 200 доларів.'.

$arr = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
];

foreach ($arr as $key => $value) {
    echo '\'' . $key . ' - зарплата ' . $value . ' доларів.\'' . "\n";
}
