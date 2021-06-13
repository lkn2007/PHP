<?php
# arrays_loops_tasks: Завдання №22
#
# Намалюйте піраміду, як показано на малюнку, користуючись циклом
# for або while.
#
#  xx
#  xxxx
#  xxxxxx
#  xxxxxxxx
#  xxxxxxxxxx

for ($i = 0, $x = ''; $i < 5; $i++) {
    $x .= 'xx';
    echo $x . "<br>\n";
}

$i = 0;
$x = '';
while ($i < 5) {
    $x .= 'xx';
    echo $x . "<br>\n";
    $i++;
}
