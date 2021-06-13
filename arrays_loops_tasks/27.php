<?php
# arrays_loops_tasks: Завдання №27
# 
# Створіть ренератор випадкових таблиць. Є зміні:
# $row - кількість рядків в таблиці, $cols - кількість стовпців в таблиці.
# Є список кольорів, в масиві: $colors = array('red', 'yellow', 'blue', 'gray', 'marron', 'brown', 'green').
# Необхідно створити скрипт, який по заданим умовам виведе таблицю розміру $row на $cols,
# в якій всі комірки будуть мати кольори, вибрані випадковим чином із масиву $colors.
# В кожній комірці повино знаходитися випадкове число.

$row = 10;
$cols = 10;
$colors = ['red', 'yellow', 'blue', 'gray', 'marron', 'brown', 'green'];

echo "<table align = \"center\" border=\"0\">\n";
for ($j = 1; $j <= $row; $j++) {
    echo "<tr>\n";
    for ($i = 1; $i <= $cols; $i++) {
        echo "<td align=\"center\" bgcolor = " . $colors[rand(0, count($colors) - 1)] .  ">" . rand() . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
