<?php
echo "<br><div align = center><b>php_basics_tasks:</b> Завдання №12 </div><br>";

$day = 0;
$sign_0 = ". Це робочий день";
$sign_1 = ". Це вихідний день";
$sign_2 = ". Це невідомий день";
echo "\$day = " . $day;
switch ($day) {
    case 1:
        echo $sign_0;
        break;
    case 2:
        echo $sign_0;
        break;
    case 3:
        echo $sign_0;
        break;
    case 4:
        echo $sign_0;
        break;
    case 5:
        echo $sign_0;
        break;
    case 6:
        echo $sign_1;
        break;
    case 7:
        echo $sign_1;
        break;
    default:
        echo $sign_2;
        break;
}
