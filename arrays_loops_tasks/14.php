<?php
# arrays_loops_tasks: Завдання №14
#
# Дано масив з єлементами 4, 2, 5, 19, 13, 0, 10. За допомогою цикла foreach і оператора if
# провірте чи є в масиві єлемент зі значенням $e, рівним 2, 3 або 4. Якщо є - виведіть на
# єкран 'Є!', інакше  виведіть 'Немає!'.

$arr = [4, 2, 5, 19, 13, 0, 10];
$message = false;
foreach ($arr as $value) {
    if ($value === 2 || $value === 3 || $value === 4) {
        $message = true;
    }
}
echo ($message) ? 'Є!' : 'Не має!';
