<?php

class FibonacciSeries{
    public function getFibonacciNumber(int $n)
    {
        if ($n <= 1){
            return $n;
        } else {
            return $this->getFibonacciNumber($n - 1) + $this->getFibonacciNumber($n - 2);
        }
    }
}

$ob = new FibonacciSeries();
echo $ob->getFibonacciNumber(19);