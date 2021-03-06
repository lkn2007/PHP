<?php
# arrays_loops_tasks: Завдання №24
#
# Вам потрібно розробити програму, яка рахувала б кількість входження якої-небудь
# вибраної вами цифри в вибраному вами числі. Наприклад: цифра 5 в числі 
# 442158755745 зустрічається 4 рази.
declare(strict_types=1);

$number = '442158755745';
$numeral  = '5';

$counter = 0;
$arr = str_split($number, 1);
foreach ($arr as $value) {
    ($value !== $numeral) ?: $counter++;
}
echo $counter;
