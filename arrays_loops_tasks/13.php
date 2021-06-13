<?php
# arrays_loops_tasks: Завдання №13
#
# Виведіть таблицю множення.

for ($i = 2; $i <= 9; $i++) {
    echo "<br>\n";
    for ($j = 1; $j <= 10; $j++) {
        echo $i . " * " . $j . " = " . $i * $j . "<br>\n";
    }
    echo "___________<br>\n";
}
