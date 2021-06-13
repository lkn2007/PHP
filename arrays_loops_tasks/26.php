<?php
# arrays_loops_tasks: Завдання №26
# 
# Вам потрібно  створити масив і заповнити його випадковими числами від 1 до 100 (функція rand).
# Дальше, вирахувати добуток тих єлементів, які більше нуля і в яких парні індекси.
# Після вивести не єкран єлементи, які більше нуля і в яких не парний індекс.

$arr = array();
$length = 15;
for ($i = 1; $i <= $length; $i++) {
    $arr[$i] = rand(1, 100);
}

echo 'Масив: ';
foreach ($arr as $value) {
    echo $value . ' ';
}

$product = 1;
$unpaired = '';
foreach ($arr as $key => $value) {
    if ($key % 2 === 0) {
        $product *= $value;
    }
    if ($key % 2 > 0) {
        $unpaired .=  $value . " ";
    }
}
echo "\nДобуток: " . $product;
echo "\nНепарні: " . $unpaired;
