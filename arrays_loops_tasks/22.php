<?php
# arrays_loops_tasks: Завдання №22
#
# Намалюйте піраміду, як показано на малюнку, користуючись циклом
# for або while.

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j / 2 <= $i; $j++) {
        echo 'x';
    }
    echo "<br>\n";
}