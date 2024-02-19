<?php

class bigO1
{
    /**
     * Example of big O(1) time complexity
     * However the input array is program will take first
     * element of the array
    */
    public function printFirstElementOfArray(array $numbers): string
    {
        if (empty($numbers)) {
            return "Empty array";
        }
        return "First element of array is " . $numbers[0];
    }
}


$object = new bigO1();
echo $object->printFirstElementOfArray([10,20,30,40]);