<?php

/*task
Найдите все числа, встречающиеся 2 и более раз.
Input:
Output:
*/

$numbers = "3 2 5 2 1 3 4 4 4 7";

$numbers = explode(' ', $numbers);

$dubleNumber = [];

foreach ($numbers as $number) {
    //если нет
    if (!isset($dubleNumber[$number])) {
        $dubleNumber[$number] = 1;
    } else {
        $dubleNumber[$number]++;
    }
    if ($dubleNumber[$number] === 2) {
        echo $number . ' ';
    }
}
echo "\n";
