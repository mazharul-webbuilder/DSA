<?php

class BinarySearch
{
    /**
     * Implement Binary Search Algorithm
    */
    public function FoundNumberByBinarySearch(array $listOfNumber, int $target): string
    {
        // Before perform Binary Search sort the array first with accessioning order
        asort($listOfNumber);

        $left  = 0;
        $right = count($listOfNumber) - 1;

        while ($left <= $right) {
            $mid = $left + floor(($right - $left) / 2);
            if ($listOfNumber[$mid] == $target){
                return "Number found at position " . floor($mid);
            }
            if ($listOfNumber[$mid] < $target)
            {
                $left = $mid + 1;
            } else{
                $right = $mid - 1;
            }
        }
        return "Number not found";
    }
}

$obj = new BinarySearch();

echo $obj->FoundNumberByBinarySearch([1,4,6,7,10,19,22,25,36,65,69,70,78,80,85,98,100], 6969);