<?php
echo "<br><div align = center><b>php_basics_tasks:</b> Завдання №6 </div><br>";

$age = 0;
echo "Вік = " . $age;
if ($age >= 18 && $age <= 59) {
    echo ". Вам ще працювати і працювати.";
} else if ($age > 59) {
    echo ". Вам пора на пенсію.";
}
