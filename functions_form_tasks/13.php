<?php
# functions_form_tasks: Завдання №13 
#
# Дано рядок $string = 'яблуко черешня вишня вишня черешня груша яблуко черешня вишня яблуко вишня вишня 
# черешня груша яблуко черешня черешня вишня яблуко вишня вишня черешня вишня черешня груша яблуко черешня 
# черешня вишня яблуко вишня вишня черешня черешня груша яблуко черешня вишня';
# 
# Підсчитайте, скільки раз кожен фрукт зустрічається в цьому рядку. Виведіть в вигляді списка в порядку зменшення кількості:
#
# Приклад виводу:
# яблоко – 12
# черешня – 8
# груша – 5
# слива - 3

$string = 'яблуко черешня вишня вишня черешня груша яблуко черешня вишня яблуко вишня вишня черешня груша яблуко черешня черешня вишня яблуко вишня вишня черешня вишня черешня груша яблуко черешня черешня вишня яблуко вишня вишня черешня черешня груша яблуко черешня вишня';

$arr = array_count_values(explode(' ', trim($string)));
arsort($arr);

foreach ($arr as $key => $value) {
  echo $key . ' - ' . $value . PHP_EOL;
}
