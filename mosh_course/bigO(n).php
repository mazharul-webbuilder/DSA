<?php

class bigOn
{
    public function __construct(public int $length){}

    /**
     * Example of time complexity big O of n
     * Here complexity depends on the input length
     * So the complexity would be bigO(n)
    */
    public function printNumbers(): void
    {
        for ($i=1; $i <= $this->length; $i++) {
            echo $i . PHP_EOL;
        }
    }
}

$object = new bigOn(120);
$object->printNumbers();
