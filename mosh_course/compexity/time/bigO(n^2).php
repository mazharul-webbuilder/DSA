<?php

class bigOn2
{
    public function __construct(public int $outerN, public int $innerN){}

    /**
     * Example of big O of n^2
     * Here program used loop inside loop
    */
    public function printBigOnSquare(): void
    {
        for ($i=1; $i<=$this->outerN; $i++) {
            for ($j=1; $j<=$this->innerN; $j++) {
                echo $i . ' ' . $j . PHP_EOL;
            }
        }
    }

}


$object  = new bigOn2(5, 10);
$object->printBigOnSquare();