<?php
class Node {
    public mixed $data;
    public mixed $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function append($data): void
    {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }

    public function prepend($data): void
    {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function display(): void
    {
        $current = $this->head;

        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }

        echo "NULL\n";
    }
}

// Example usage:
$linkedList = new LinkedList();

$linkedList->append(1);
$linkedList->append(2);
$linkedList->append(3);

$linkedList->display();
