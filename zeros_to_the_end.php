<?php

/*task
Переместите все нули в конец строки.
Порядок остальных чисел должен сохраниться.
*/

$data = "7 0 39 0 282 2 4 0 45";
$numbers = explode(' ', $data);

$firstCount = 0;
foreach ($numbers as $number) {
    if ($number == 0) {
        $firstCount++;
    } else {
        echo $number . ' ';
    }
}
echo str_repeat('0', $firstCount);
echo "\n";
