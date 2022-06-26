<?php

include "CircularLinkedList.php";

class CircularLinkedListMain
{

    function circularMain()
    {
        $circularSinglyLinkedList = new CircularLinkedList();

        echo "=============inser at first=================\n";
        $circularSinglyLinkedList->insertAtFirst(56);
        $circularSinglyLinkedList->insertAtFirst(30);
        $circularSinglyLinkedList->insertAtFirst(70);

        echo "=============insert at end=================\n";
        $circularSinglyLinkedList->insertAtEnd(35);
        $circularSinglyLinkedList->insertAtEnd(45);

        echo "============= inser at position=================\n";
        $circularSinglyLinkedList->insertAtPosition(36, 2);

        echo "=============delete elements=================\n";
        $circularSinglyLinkedList->deleteAtBegining();
        $circularSinglyLinkedList->deleteAtLast();

        echo "=============print at end=================\n";
        $circularSinglyLinkedList->printList();
    }
}

$myCircularList = new CircularLinkedListMain();
$myCircularList->circularMain();
