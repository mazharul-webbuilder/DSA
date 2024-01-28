<?php

class Queue {
    private array $queue;

    public function __construct() {
        $this->queue = array();
    }

    /**
     * Insert into queue
    */
    public function enqueue($item): void
    {
        array_push($this->queue, $item);
    }

    /**
     * Remove the first element  from the queue,
     * and return the value of the removed element
    */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null; // Queue is empty
        }
        return array_shift($this->queue);
    }

    /**
     *current() - returns the value of the current element in an array
    end() - moves the internal pointer to, and outputs, the last element in the array
    next() - moves the internal pointer to, and outputs, the next element in the array
    prev() - moves the internal pointer to, and outputs, the previous element in the array
    each() - returns the current element key and value, and moves the internal pointer forward
     * ==================================================================================
     * $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>"; // The current element is Peter
    echo next($people) . "<br>"; // The next element of Peter is Joe
    echo current($people) . "<br>"; // Now the current element is Joe
    echo prev($people) . "<br>"; // The previous element of Joe is Peter
    echo end($people) . "<br>"; // The last element is Cleveland
    echo prev($people) . "<br>"; // The previous element of Cleveland is Glenn
    echo current($people) . "<br>"; // Now the current element is Glenn
    echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
    echo next($people) . "<br>" . "<br>"; // The next element of Peter is Joe
    */

    public function peek()
    {
        if ($this->isEmpty()) {
            return null; // Queue is empty
        }
        return reset($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    public function size(): int
    {
        return count($this->queue);
    }
}

// Example usage:
$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo "Front of the queue: " . $queue->peek() . PHP_EOL;
echo "Queue size: " . $queue->size() .  PHP_EOL;

while (!$queue->isEmpty()) {
    echo "Dequeued element: " . $queue->dequeue() .  PHP_EOL;
}

echo "Is queue empty? " . ($queue->isEmpty() ? "Yes" : "No") . PHP_EOL;
