<?php
include 'CircularNode.php';

class CircularLinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    //Add new elements at the start of the list
    public function insertAtFirst($data)
    {
        $frontNode = new Node();
        $frontNode->data = $data;
        $frontNode->next = null;

        if ($this->head == null) {
            $this->head = $frontNode;
            $frontNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next !== $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $frontNode;
            $frontNode->next = $this->head;
            $this->head = $frontNode;
        }
        $this->printList();
    }

    //Add new element at the end of the list
    public function insertAtEnd($data)
    {
        $prevNode = new Node();
        $prevNode->data = $data;
        $prevNode->next = null;
        if ($this->head == null) {
            $this->head = $prevNode;
            $prevNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $prevNode;
            $prevNode->next = $this->head;
        }
        $this->printList();  
    }

    public function insertAtPosition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;

        //if empty, head = $newnode and newnode->next = head
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            //if not empty , define node pointer temp and initialise with head.
            $temp = new Node();
            $temp = $this->head;

            for ($i = 0; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $newNode->next = $temp->next;
            $temp->next = $newNode;
        }
        $this->printList();
    }

    public function deleteAtBegining()
    {

        if ($this->head == null) {
            echo "List is Empty";
        } else {
            $temp = new Node();
            $temp = $this->head;
            $last = null;
            if ($temp->next == $this->head) {
                $this->head = null;
            } else {

                while ($temp->next !== $this->head) {
                    $temp = $temp->next;
                }
                $last = $temp;
                $temp = $this->head;
                $this->head = $this->head->next;
                $last->next = $this->head;
                echo "element deleted successfully \n";
            }
        }
        $this->printList();
    }

    public function deleteAtLast()
    {
        if ($this->head == null) {
            echo "List is Empty";
        } else {
            $temp1 = new Node();
            $temp2 = new Node();
            $temp1 = $this->head;
            if ($temp1->next == $this->head) {
                $this->head = null;
            } else {
                while ($temp1->next !== $this->head) {
                    $temp2 = $temp1;
                    $temp1 = $temp1->next;
                }
                $temp2->next = $this->head;
                echo "element at last deleted successfully \n";
            }
        }
        $this->printList();
    }

    //display the content of the list
    public function printList()
    {
        $temp = $this->head;
        if ($temp != null) {
            echo "The list of elements are : ";
            while (true) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head)
                    break;
            }
            echo "\n";
        } else {
            echo "The list is empty  \n";
        }
    }
}

?>