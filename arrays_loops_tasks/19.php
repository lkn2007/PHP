<?php
# arrays_loops_tasks: Завдання №19
#
# Складіть масив днів тижня. За допомогою циклу foreach виведіть всі дні тижня,
# а поточний день тижня виведіть курсивом. Поточний день тижня повинен зберігатися 
# в зміній $day.

$arr = [
    'Понеділок',
    'Вівторок',
    'Середа',
    'Четвер',
    'П\'ятниця',
    'Субота',
    'Неділя'
];

$day = 'Середа';
foreach ($arr as $value) {
    echo ($value !== $day) ? $value . "<br>\n" : "<i>" . $value . "</i><br>\n";
}
