<?php


class Stack
{   

    public $position = 0 ;
    function __construct()
    {
        $stack=array();
    }

    function push($item)
    {
        
        $this->stack[$this->position++] = $item;

    }
    function pop()
    {
        unset($this->stack[sizeof($this->stack)-1]);
    }

    function isEmpty($stack)
    {

    }

    function display()
    {
        for($i=sizeof($this->stack)-1;$i>=0;$i--)
        {
            echo $this->stack[$i]. "\n";
        }
    }
}

$newStack= new Stack;


$newStack->push(50);
$newStack->push(60);
$newStack->push(70);
$newStack->push(90);
$newStack->push(100);
$newStack->push(110);


echo $newStack->display()."<br/>";


$newStack->pop();

echo $newStack->display()."<br/>";