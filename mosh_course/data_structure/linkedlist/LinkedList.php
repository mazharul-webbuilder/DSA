<?php

require 'Node.php';
class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    // Add a node to the end of the list
    public function insertIntoEnd($data): void
    {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            // head is not empty that mean head is instance of node class
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    // Add a node to the beginning of the list
    public function insertIntoFirst($data): void
    {
        $newNde = new Node($data);
        $newNde->next = $this->head;
        $this->head = $newNde;
    }

    // Insert a node at a specific position
    public function insertAt($data, $position): void
    {
        $newNode = new Node($data);
        if ($position === 0) {
            $newNode->next = $this->head;
            $this->head = $newNode;
            return;
        }
        $current = $this->head;
        $count = 0;

        while ($current !== null && $count < $position - 1) {
            $current = $current->next;
            $count++;
        }
    }

    // Delete a node at a specific position
    public function deleteAt($position): void
    {
        if ($this->head === null || $position < 0){
            return;
        }
        if ($position === 0) {
            $this->head = $this->head->next;
            return;
        }
        $current = $this->head;
        $count = 0;
        while ($current !== null && $count < $position - 1) {
            $current = $current->next;
            $count++;
        }
        if ($current !== null && $current->next !== null) {
            $current->next = $current->next->next;
        }
    }

    // Delete a node with a given value
    public function delete($data)
    {
        if ($this->head === null) {
            return;
        }

        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        $current = $this->head;
        while ($current->next !== null && $current->next->data !== $data) {
            $current = $current->next;
        }

        if ($current->next !== null) {
            $current->next = $current->next->next;
        }

    }

    // Display the elements of the linked list
    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo PHP_EOL;
    }

    // Check if the linked list is empty
    public function isEmpty()
    {
        return $this->head === null;
    }

    // Get the length of the linked list
    public function length()
    {
        $count = 0;
        $current = $this->head;
        while ($current !== null) {
            $count++;
            $current = $current->next;
        }
        return $count;
    }

    // Reverse the linked list
    public function reverse()
    {
        $prev = null;
        $current = $this->head;

        while ($current !== null) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }

        $this->head = $prev;
    }

}