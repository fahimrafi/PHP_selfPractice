<?php

class Queue
{
    private $pos;
    private $queue;
    private $pop;

    function __construct()
    {
        $this->queue= array();
        $this->pos = 0 ;
        $this->pop = 0 ;
    }

    function enqueue($num)
    {
        $this->queue[$this->pos++]=$num;
    }

    function dequeue()
    {
        if( $this->pos-1 < $this->pop) //1 pos =1, pop =0 ;
        {
            echo "Queue is already Empty";
        }
        else
        {
            for($i=1; $i)
            $this->queue[$this->pop++];
        }
       $this->queue[$this->pop++];
    }
    
    $myQueue = new Queue;


    $myQueue-> enqueue(45);
}