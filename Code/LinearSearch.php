<?php

class LinearSearch{
    public function findNumber(int $target): string
    {
        $listOfNumbers = [60, 1, 88, 10, 11, 100];
        $position = null;

        foreach ($listOfNumbers as $index => $number) {
            if ($number == $target) {
                $position = $index;
            }
        }
        return isset($position) ? "Found at Index $position" : "Not found";
    }
}
$object = new LinearSearch();
echo $object->findNumber(1);
