<?php

/*task
нужно написать код, который будет выводить
первые n чисел этой последовательности Фибоначчи.
Input: n - количество чисел для вывода
Output: последовательность чисел, разделенная пробелами
*/

/**
 * @param $number
 * @return string
 */
function fibonacci($number): string
{
    $fibonacci = [0, 1];

    for ($i = 1; $i < $number - 1; $i++) {
        $fibonacci[] = $fibonacci[$i] + $fibonacci[$i - 1];
    }
    return implode(' ', $fibonacci);
}

echo fibonacci(6);
echo "\n";