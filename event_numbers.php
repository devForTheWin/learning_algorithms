<?php

/*task
Найдите все четные числа и выведите их,
разделяя пробелами. Порядок чисел должен быть таким же, как и на входе.
Input: 1 2 3 4 5 6 7 8 9
Output: 2 4 6 8
*/

$str = '1 2 3 4 5 6 7 8 9';

$numbers = explode(' ', $str); //разбиваю строку. получаю массив
foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo $number . ' ';
    }
}
echo "\n";
//var_dump($numbers);