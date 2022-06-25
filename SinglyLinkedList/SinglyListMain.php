<?php
include "SinglyLinkedList.php";

class Main
{

    function singlyLinkedListMain()
    {
        $linkedList = new SinglyLinkedList();

        $linkedList->insertAtFirst(56);
        $linkedList->insertAtFirst(30);
        $linkedList->insertAtFirst(70);
        echo "-----------adding last---------------\n";
        $linkedList->addLast(30);
        $linkedList->addLast(56);
        $linkedList->addLast(70);
        echo "-----------adding At position---------------\n";
        $linkedList->addAtPosition(60, 2);
        $linkedList->addAtPosition(56, 3);
        $linkedList->addAtPosition(70, 5);

        echo "-----------print values---------------\n";
        $linkedList->printList();
        echo "-----------delete values---------------\n";
        $linkedList->deleteAtPosition(2);
        echo "-----------print values---------------\n";
        $linkedList->printList();
    }
}
$main = new Main();
$main->singlyLinkedListMain();
