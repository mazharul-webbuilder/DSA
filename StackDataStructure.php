<?php

class Stack {
    private array $stack;

    public function __construct(public int $stackSize) {
        $this->stack = [];
    }

    /**
     * Push into Stack
    */
    public function push($item): void
    {
        if (!$this->isStackFull()){
            array_push($this->stack, $item);
        }
        echo "Stack is full";
    }

    /**
     * Remove item from stack
    */
    public function pop() {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }
        return array_pop($this->stack);
    }

    /**
     * get data from stack
    */
    public function peek() {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }
        return end($this->stack);
    }

    /**
     * Check is stack is empty
    */
    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    /**
     * Count number of element in the stack
    */
    public function size(): int
    {
        return count($this->stack);
    }

    /**
     * Is Stack full
    */
    private function isStackFull(): bool
    {
        return count($this->stack) >= $this->stackSize;
    }
}

// Example usage:
$stack = new Stack(500);

$stack->push(1);
$stack->push(2);
$stack->push(3);

echo "Top of the stack: " . $stack->peek() . "\n";
echo "Stack size: " . $stack->size() . "\n";

while (!$stack->isEmpty()) {
    echo "Popped element: " . $stack->pop() . "\n";
}

echo "Is stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "\n";
