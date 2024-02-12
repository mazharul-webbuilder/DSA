<?php

class GetLowestNumber
{
    public function getLowest(array $numbers)
    {
        try
        {
            $lowestNumber = $numbers[count($numbers) - 1];
            foreach ($numbers as $number) {
                $lowestNumber = min($number, $lowestNumber);
            }
            return $lowestNumber;
        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }
}

$obj = new GetLowestNumber();
echo $obj->getLowest([10,34,64,2,6,13, 3]);