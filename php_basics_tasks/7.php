<?php
# php_basics_tasks: Завдання №7
#
# Розширте конструкцію if із п.5-6, виводячи фразу: "Вам ще рано працювати" при умові,
# при умові, що значення зміної age попадає в діапазон чисел від 0 до 17 (включно).

$age = 0;
if ($age >= 0 && $age <= 17) {
    echo 'Вам ще рано працювати.';
}
if ($age >= 18 && $age <= 59) {
    echo 'Вам ще працювати і працювати.';
}
if ($age > 59) {
    echo 'Вам пора на пенсію.';
}
