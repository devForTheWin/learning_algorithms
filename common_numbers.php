<?php

/*task
найти максимально часто встречающееся число
*/

$data = "7 8 9 7 7 7 7 8 5 2 3 4 4 4 7";

$numbers = explode(' ', $data);

$maxCommonNum = [];
$currentCommonMax = 1;
$currentMaxNumber = $numbers[0];

foreach ($numbers as $number) {
    if (!isset($maxCommonNum[$number])) {
        $maxCommonNum[$number]=1;
    } else {
        $maxCommonNum[$number]++;
    }
    if($maxCommonNum[$number] > $currentCommonMax) {
        $currentCommonMax = $maxCommonNum[$number];
        $currentMaxNumber = $number;
    }
}
echo $currentMaxNumber;
echo "\n";
