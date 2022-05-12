<?php

/*task
Измените порядок слов в обратном порядке.
Словом считается любая последовательность НЕпробельных символов.
Input: hello world
Output: world hello
*/
$str = 'hello world';

$str = implode(' ', array_reverse(explode(' ', $str)));

echo $str . "\n";