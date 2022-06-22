<?php

class Stack
{
    public $top;
    public $stackArray;
    public $size;

    //parameterised constructor with user defined size
    function __construct($size)
    {
        $this->top = -1;
        $this->size = $size;
        $this->stackArray = [];
    }

    //function to check stack is empty
    function isStackEmpty()
    {
        echo "\n------------checking stack empty-----------------------\n";
        if ($this->top == -1) {
            return true;
        } else {
            return false;
        }
    }
    //function to check stack is full
    function isStackFull()
    {
        echo "\n------------checking stack full-----------------------\n";
        if ($this->top == $this->size - 1) {
            return true;
            echo "The stack is full";
        } else {
            return false;
            echo "The stack is full";
        }
    }

    //function to add elements to the stack 
    //check if stack is empty or full the add data
    function push($data)
    {
        if ($this->isStackEmpty() || !$this->isStackFull()) {
            $this->stackArray[++$this->top] = $data;
            echo $data . " is added to the stack";
        } else {
            echo "Stack is full\n";
        }
    }

    //fuction to remove the top element from the stack,
    //check if stock is empty
    function pop()
    {
        echo "\n-------------Removing top element----------------------\n";
        if ($this->isStackEmpty()) {
            echo "Stack is Empty \n";
        } else {
            echo "\n The element removed from the stack is : " . $this->stackArray[$this->top--];
        }
    }

    //function to check if array is empty and display the topmost element
    function peek()
    {
        echo "\n---------------show top element--------------------\n";
        if ($this->isStackEmpty()) {
            echo "\n Stack is empty";
        } else {
            echo "\n The top most element of the stack is :" . $this->stackArray[$this->top];
        }
    }

    //function to check if stack is empty and display all the elements of the stack
    function displayStackElements()
    {
        echo "\n--------------display elements in stack---------------------\n";
        if ($this->isStackEmpty()) {
            echo "Stack is empty \n";
        } else {
            echo "\n The stack elements are : \n[ ";
            for ($i = $this->top; $i >= 0; $i--) {
                echo $this->stackArray[$i] . " ";
            }
            echo " ]\n";
        }
    }
}

//calling functions with complete input from user
$size = readline("Enter the size of the stack: ");
$stack = new Stack($size);
for ($i = 0; $i < $size; $i++) {
    echo "\n";
    $input = readline("Enter the element to be added to the stack : ");
    echo "\n--------------adding elements---------------------\n";
    $stack->push($input);
}
$stack->displayStackElements();
$stack->peek();
$stack->pop();
$stack->displayStackElements();


?>