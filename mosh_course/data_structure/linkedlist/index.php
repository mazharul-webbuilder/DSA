<?php

require 'LinkedList.php';


$linkedList = new LinkedList();

$linkedList->insertIntoFirst(10);
$linkedList->insertIntoFirst(10);
$linkedList->insertIntoFirst(10);
$linkedList->insertIntoEnd(20);

$linkedList->display();