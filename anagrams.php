<?php

/*task
нужно написать код, который считает две данные строки
и выведет 'yes' если они являются анаграммами друг друга,
и 'no' если не являются.
Input: $word1 $word2
Output: yes или no
*/

//$word1 = "olovo";
//$word2 = "slovo";

$word1 = "heart";
$word2 = "earth";

if (strlen($word1) !== strlen($word2)) {
    echo 'no';
    return;
}

$symbolsWord1 = [];
$symbolsWord2 = [];

$length = strlen($word1);

//складываем по ключу буквы в массив
for ($i = 0; $i < $length; $i++) {
    //проверяем наличие ключа
    if (isset($symbolsWord1[$word1[$i]])) {
        $symbolsWord1[$word1[$i]]++;
    } else {
        //встречаем букву - записываем 1
        $symbolsWord1[$word1[$i]] = 1;
    }
    if (isset($symbolsWord2[$word2[$i]])) {
        $symbolsWord2[$word2[$i]]++;
    } else {
        $symbolsWord2[$word2[$i]] = 1;
    }
}

foreach ($symbolsWord1 as $value => $count) {
    //если отсутствует значение или значение есть, но не равно счету
    if (!isset($symbolsWord2[$value]) || $symbolsWord2[$value] !== $count) {
        echo 'no' . "\n";
        return;
    }
}
echo 'yes';
echo "\n";
