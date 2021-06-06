<?php
echo "<br><div align = center><b>php_basics_tasks:</b> Завдання №15 </div><br>";

$a = -10;
$b = 11;
$operator = "/";
if ($operator == "+") {
    echo "a = " . $a . " , b = " . $b . "<br><br> a + b = " . $a + $b;
} else if ($operator == "-") {
    echo "a = " . $a . " , b = " . $b . "<br><br> a - b = " . $a - $b;
} else if ($operator == "*") {
    echo "a = " . $a . " , b = " . $b . "<br><br> a * b = " . $a * $b;
} else if ($operator == "/") {
    if ($b == 0) {
        echo "На нуль ділити неможна ";
    } else {
        echo "a = " . $a . " , b = " . $b . "<br><br> a / b = " . $a / $b;
    }
} else if ($operator == "%") {
    echo "a = " . $a . " , b = " . $b . "<br><br> a % b = " . $a % $b;
}
