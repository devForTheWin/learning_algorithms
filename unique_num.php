<?php

/*task
Удалите все повторы чисел.

Input: 0 2 3 1 2 3 3 3 2 0 7 7 9 5
Output: 0 1 2 3
*/

$str = "0 2 3 1 2 3 3 3 2 0 7 7 9 5";

//вариант 1. приобразовать строку в массив
// и воспользоваться функцией array_unique
$numbers = explode(' ', $str);
$numbers = array_unique($numbers);
$result = implode(' ', $numbers);
echo $result;
echo "\n";

//вариант 2. приобразовать строку в массив
// и пройтись циклом, записав значения в новый массив.
$numbers = explode(' ', $str);

$uniqueNum = [];

foreach ($numbers as $number) {
    if (!isset($uniqueNum[$number])) {
        $uniqueNum[$number] = true;
        echo $number . ' ';
    }
}

echo "\n";

