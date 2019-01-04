<?php

class LinkListItem
{
   public $value;
   public $child;
}

class LinkList
{
   public $head;

   public function __construct()
   {
       $this->head = null;
   }

   public function addItem($item)
   {
       if($this->head == null)
           $this->head = $item;
       else
       {
           $end = $this->getEnd($this->head);
           $end->child = $item;
       }
   }

   public function getEnd($head)
   {
       $start = $head;
       while($start->child != null)
       {
           $start = $start->child;
       }
       return $start;
   }

   public function print()
   {
       $pos = $this->head;

       while($pos->child != null)
       {
           echo $pos->value;
           $pos = $pos->child;
       }

       echo $pos->value;
   }
}

$list = new LinkList();

$item = new LinkListItem();
$item->value = 5;

$list->addItem($item);

$item2 = new LinkListItem();
$item2->value = 7;

$list->addItem($item2);

$item3 = new LinkListItem();
$item3->value = -1;

$list->addItem($item3);

$item4 = new LinkListItem();
$item4->value = 9;

$list->addItem($item4);

$list->print();