<?php
# arrays_loops_tasks: Завдання №18
#
# Складіть масив днів тижня. За допомогою циклу foreach виведіть всі дні тижня,
# вихідні дні потрібно вивести товстим.

$arr = array(
    'Понеділок',
    'Вівторок',
    'Середа',
    'Четвер',
    'П\'ятниця',
    'Субота',
    'Неділя'
);

foreach ($arr as $value) {
    if ($value === 'Субота' || $value === 'Неділя') {
        echo "<b>" . $value . "</b><br>\n";
    } else {
        echo $value . "<br>\n";
    }
}