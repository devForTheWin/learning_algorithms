<?php

/*task
Найдите максимальное произведение двух чисел из этой строки.
*/

$data = "1 2 3 4";

$numbers = explode(' ', $data);

$maximNum = $numbers[0];

foreach ($numbers as $i => $number1) {
    foreach ($numbers as $k => $number2) {
        if ($i === $k) {
            continue;
        }
        $result = $number1 * $number2;
        if ($result > $maximNum) {
            $maximNum = $result;
        }
    }
}
echo $maximNum;
echo "\n";
