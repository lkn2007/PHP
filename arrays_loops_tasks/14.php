<?php
# arrays_loops_tasks: Завдання №14
#
# Дано масив з єлементами 4, 2, 5, 19, 13, 0, 10. За допомогою цикла foreach і оператора if
# провірте чи є в масиві єлемент зі значенням $e, рівним 2, 3 або 4. Якщо є - виведіть на
# єкран 'Є!', інакше  виведіть 'Немає!'.

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);
$flag = false;
foreach ($e as $val) {
    foreach ($arr as $value) {
        if ($value === $val) {
            $flag = true;
            break;
        }
    }
    if ($flag) {
        break;
    }
}
if ($flag) {
    echo 'Є!';
} else {
    echo 'Не має!';
}
