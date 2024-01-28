<?php

class SelectionSort
{
    public function selectionSort(array $numbers)
    {
        for ($i = 0; $i < count($numbers) - 1; $i++) {
            $indexMin = $i;
            for ($j=$i+1; $j < count($numbers); $j++)
            {
                if ($numbers[$j] < $numbers[$indexMin]){
                    $indexMin = $j;
                }
            }
            if ($indexMin != $i){
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$indexMin];
                $numbers[$indexMin] = $temp;
            }
        }
        return $numbers;
    }
}

$object = new SelectionSort();
var_dump($object->selectionSort([1,4,58, 6,7,10,19,22,25,36,69,48,6,5,69,70,78,80,85,98]));