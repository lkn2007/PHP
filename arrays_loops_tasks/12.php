<?php
# arrays_loops_tasks: Завдання №12
#
# Дано число $n = 1000. Поділіть його на 2 стільки раз, поки результат ділення не стане меньше 50.
# Яке число пулучиться? Посчитайте кількість ітерацій, необхідних для цього, і запишіть його в 
# зміну $num.

$num = 0;
for ($n = 1000; $n > 50; $n /= 2) {
    $num++;
}

$num_2 = 0;
$j = 1000;
while ($j > 50) {
    $j /= 2;
    $num_2++;
}
