<?php

include 'DoublyLinkedList.php';
class DoublyLinkedListLMain
{
    function DoublyLinkedListMain()
    {
        $MyLinkedList = new DoublyLinkedList();
        $MyLinkedList->insertAtLast(9);
        $MyLinkedList->insertAtLast(7);
        $MyLinkedList->insertAtLast(5);
        $MyLinkedList->printList();

        $MyLinkedList->insertAtPosition(77, 2);
        $MyLinkedList->insertAtPosition(66, 4);
        $MyLinkedList->printList();

        $MyLinkedList->insertAtLast(55);
        $MyLinkedList->printList();

        $MyLinkedList->insertAtFirst(1);
        $MyLinkedList->printList();

        $MyLinkedList->deleteKey(5);
        $MyLinkedList->printList();

        $MyLinkedList->deleteFirst();
        $MyLinkedList->printList();

        $MyLinkedList->deleteLast();
        $MyLinkedList->printList();

        $MyLinkedList->insertAtPosition(25, 3);
        $MyLinkedList->printList();

        $MyLinkedList->deleteAtPosition(4);
        $MyLinkedList->printList();

    }
}
$MyLinkedList = new DoublyLinkedListLMain();
$MyLinkedList->DoublyLinkedListMain();
