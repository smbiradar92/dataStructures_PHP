<?php

include "Node.php";

class SinglyLinkedList
{
    public $head;
    //costructor to create an empty linkedlist
    function __construct()
    {
        $this->head = null;
    }

    //function to check if list is empty
    public function isListEmpty()
    {
        if ($this->head == null) {
            echo "The list is empty\n";
        }
    }

    //function to check element at firstNode is empty 
    //and then add element at head if its not empty 
    public function insertAtFirst($data)
    {
        //initialising node object and assigning 
        //the value of next and data
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->isListEmpty()) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //function to add element at last by checking head 
    //as null then use a temp file to store its value as head
    //loop value till we get temp next value as null the 
    //final temp next value will be set as the node value.
    public function addLast($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    //function to check for position input and add the data at the position using for loop
    public function addAtPosition($data, $position)
        {
            $newNode = new Node();
            $newNode->data = $data;
            $newNode->next = null;
    
            if ($position < 0 ) {
                echo "\nPosition should be >= 1";
            } else if ($position == 1) {
                $newNode->next = $this->head;
                $this->head = $newNode;
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
                    $temp->next = $newNode;
                } else {
                    echo "\nPrevious node is null";
                }
            }
    }

    //function to print the values
    public function printList()
    {
      //  $temp = new Node();
        $temp = $this->head;
        // display all the values and move to next node till the temp is null 
        if ($temp != null) {
            echo "The elements of the list are : \n";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        }else{
            echo "The list is empty";
        }
    }

    //function to delete element from start of the list
    public function deleteAtFirst()
    {
        echo "After Deleting first element \n";
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $this->head = $this->head->next;
            }
        }
    }

    //function to delete element from end of the list
    public function deleteAtEnd()
    {
        echo "After Deleting last element \n";
        if ($this->head != null) {
            if ($this->head->next == null) {
                //$this->head = null;
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

        //function to delete element at input position
        public function deleteAtPosition($position)
        {
            echo "After deleting element from $position \n";
            if ($position < 1) {
                echo "Position should be greater than zero \n";
            } elseif ($position == 1 && $this->head != null) {
                $this->head = $this->head->next;
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
                } else {
                    echo "The Node is already Null\n";
                }
            }
        }    
}

?>