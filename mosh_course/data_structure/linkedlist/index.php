<?php

require 'LinkedList.php';


$linkedList = new LinkedList();

$linkedList->insertIntoFirst(1);
$linkedList->insertIntoFirst(2);
$linkedList->insertIntoFirst(3);
$linkedList->insertIntoEnd(4);
$linkedList->deleteAt(5);
$linkedList->insertAt(6, 2);

$linkedList->display();