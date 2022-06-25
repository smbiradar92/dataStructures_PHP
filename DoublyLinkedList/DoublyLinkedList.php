<?php

include 'Node.php';

class DoublyLinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }


    //function to check element at firstNode is empty 
    //and then add element at head if its not empty 
    public function insertAtFirst($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $this->head->prev = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //function to add element at last by checking head 
    //as null then use a temp file to store its value as head
    //loop value till we get temp next value as null the 
    //final temp next value will be set as the node value.

    public function insertAtLast($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }
    //function to check for position input and add the data at the position using for loop
    public function insertAtPosition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($position < 1) {
            echo "\nPosition should be >= 1.";
        } elseif ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
            $this->head->prev = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $newNode->prev = $temp;
                $temp->next = $newNode;
                if ($newNode->next != null) {
                    $newNode->next->prev = $newNode;
                }
            } else {
                echo "\nThe Previous node is null.";
            }
        }
    }


    //Function to delete first(head) node

    public function deleteFirst()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $this->head = $this->head->next;
                $this->head->prev = null;
            }
        }
    }


    //function to delete data at last node  
    public function deleteLast()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != null) {
                    $temp = $temp->next;
                }
                $temp->next = null;
            }
        }
    }


    //function to delete a node at given position
    public function deleteAtPosition($position)
    {
        if ($position < 1) {
            echo "\nPosition should be >=1.";
        } elseif ($position == 1 && $this->head != null) {
            $this->head = $this->head->next;
            if ($this->head != null) {
                $this->head->prev = null;
            }
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null && $temp->next != null) {
                $temp->next = $temp->next->next;
                if ($temp->next->next != null) {
                    $temp->next->next->prev = $temp->next;
                }
            } else {
                echo "\nThe Node is already Null.";
            }
        }
    }


    //function to print the Elements of the list    
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }


    // Function to delete a particular key
    //Passing the key as parameter
    public function deleteKey($key)
    {
        if ($this->head != null) {
            $present = $previous = $this->head;
            while ($present->data != $key) {
                $previous = $present;
                $present = $present->next;
            }
            if ($present == $previous) {
                $this->head = $present->next;
            }
            $previous->next = $present->next;
            $present->prev = $previous;
        } else {
            echo "The list is empty.";
        }
    }
}
