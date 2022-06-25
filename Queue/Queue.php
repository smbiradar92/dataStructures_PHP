<?php

class Queue
{
    public $queueArray;
    public $entry;
    public $exit;
    public $size;


    //Constructor passing paramener $size for array
    function __construct($size)
    {
        $this->queueArray = [];
        $this->entry = -1;
        $this->exit = -1;
        $this->size = $size;
    }


    //function to check if queue is empty
    function isQueueEmpty()
    {
        echo "\n--------------checking queue is empty---------------------\n";

        if ($this->entry == -1) {
            return true;
        } else {
            return false;
        }
    }

    //function to check if queue is full
    public function isQueueFull()
    {
        if ($this->entry + 1 == $this->size) {
            return true;
        } else {
            return false;
        }
    }

    //function for checking the queue is empty or full 
    //and inserting elements to queue
    function enQueue($data)
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
            $this->exit++;
        } else if ($this->isQueueFull()) {
            echo "\nQueue is Full";
            return;
        }
        $this->entry++;
        $this->queueArray[$this->entry] = $data;
    }

    //function to check if queue is empty and delete the element from queue
    function deQueue()
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nRemoved element is " . $this->queueArray[$this->exit];
            $this->exit++;
        }
    }

    //function displayQueueElements to display queue elements
    function displayQueueElements()
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nElements of queue are : ";
            for ($i = $this->exit; $i <= $this->entry; $i++) {
                echo $this->queueArray[$i] . " ";
            }
        }
    }

    //function display to peek top element from queue
    function peek()
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nQueue top element is " . $this->queueArray[$this->exit];
        }
    }
}
//calling the functions with input from users
$size = readline("Enter the size of the stack: ");
$queue = new Queue($size);
for ($i = 0; $i < $size; $i++) {
    echo "\n";
    $input = readline("Enter the element to be added to the queue : ");
    echo "\n--------------adding elements---------------------\n";
    $queue->enQueue($input);
    echo $input . " is added to the queue\n";
}
$queue->displayQueueElements();
$queue->deQueue();
$queue->displayQueueElements();
$queue->peek();

?>