<?php


$array = [10, 'fasd', 9, null, true];

$array[0] = 580;

echo in_array(580, $array) ?: "Not Exist" . PHP_EOL;

var_dump($array);

foreach ($array as $item) {
    echo $item . PHP_EOL;
}