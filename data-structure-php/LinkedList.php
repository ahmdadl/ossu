<?php

final class Node
{
    public function __construct(
        public readonly mixed $val,
        public readonly ?self $pointer
    ) {}
}

final class LinkedList
{
    private ?Node $lastNode = null;

    public function push(mixed $value): Node
    {
        $node = new Node($value, $this->lastNode);

        $this->lastNode = $node;

        return $node;
    }

    public function pop(): Node
    {
        $removedNode = $this->lastNode;

        $this->lastNode = $removedNode->pointer;

        return $removedNode;
    }

    public function display()
    {
        $node = $this->lastNode;
        while ($node !== null) {
            var_dump($node->val);
            $node = $node->pointer;
        }
    }

    public function getLastNode(): Node
    {
        return $this->lastNode;
    }


}

// $linkedList = new LinkedList();
// $linkedList->push(1);
// $linkedList->push(2);
// $linkedList->push(3);
// $linkedList->push(4);
// $linkedList->push(5);
// $linkedList->pop();
// $linkedList->push(6);
// $linkedList->push(7);

// $linkedList->display();

// var_dump($linkedList);

final class Stack
{
    public function __construct(
        private ?Node $top = null,
        private LinkedList $list = new LinkedList()
    ) {}

    public function isEmpty(): bool
    {
        return $this->top === null;
    }
    
    public function push(mixed $value)
    {
        $node = $this->list->push($value);

        $this->top = $node;
    }

    public function pop()
    {
        $this->list->pop();

        $this->top = $this->list->getLastNode();
    }

    public function display()
    {
        return $this->list->display();
    }
}

$stakedLinked = new Stack();
$stakedLinked->push('A');
$stakedLinked->push('B');
$stakedLinked->push('C');
$stakedLinked->push('D');
$stakedLinked->display();