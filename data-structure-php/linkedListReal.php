<?php

final class Node
{
    public function __construct(
        public readonly int|string $val,
        public ?Node $next = null,
    ) {}
}

final class LinkedListReal
{
    private ?Node $head = null;

    public function unshift(int|string $val): Node
    {
        $node = new Node($val, $this->head);
        
        $this->head = $node;

        return $node;
    }

    public function push(int|string $val): Node
    {
        if ($this->head === null) {
            return $this->unshift($val);
        }

        $current = $this->head;
        while ($current->next) {
            $current = $current->next;
        }

        $node = new Node($val);
        
        $current->next = $node;
        
        return $node;
    }

    public function pop(): void
    {
        if ($this->isEmpty()) {
            var_dump('List is Empty');
            return;
        }

        $current = $this->head;

        if (!$current->next) {
            $this->head = null;
            return;
        }

        while($current->next->next) {
            $current = $current->next;
        }
        
        $current->next = null;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function display(): void
    {
        if ($this->isEmpty()) {
            var_dump('List is Empty');
            return;
        }

        $head = $this->head;
        
        while($head) {
            var_dump($head->val);
            $head = $head->next;
        }
    }

    public function shift(): ?Node
    {
        if ($this->isEmpty()) {
            var_dump('List is Empty');
            return null;
        }

        $this->head = $this->head->next; // node or null if one element
        return $this->head;
    }

    public function search(int|string $val): int
    {
        $head = $this->head;
        $index = 1;

        while($head !== null) {
            if ($head->val === $val) {
                return $index;
            }
            
            $head = $head->next;

            $index++;
        }

        return -1;
    }

    public function insertAtPos(int|string $val, int $pos): void
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('list is empty');
        }

        $current = $this->head;
        for ($i = 0; $i < $pos-1;$i++) {
            $current = $current->next;
        }

        $node = new Node($val, $current->next);
        $current->next = $node;
    }

    public function removeAtPos(int $pos): void
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('list is empty');
        }

        
        $prev = $this->head;
        for ($i = 0; $i < $pos-1;$i++) {
            $prev = $prev->next;
        }

        $toBeRemoved = $prev?->next;
        if (!$toBeRemoved) {
            $prev->next = null;
        }

        $after = $prev->next?->next;
        $prev->next = $after;
    }

    public function reverse(): void
    {
        $prev = null;
        $current = $this->head;
        $next = $current->next;
        
        while($next !== null) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }

        $this->head = $prev;

    }
}

$list = new LinkedListReal;
$list->push('A');
$list->push('B');
$list->push('C');
$list->reverse();
$list->display();
exit;
// $list->pop();
$list->insertAtPos('Y', 2);
$list->push('D');
$list->push('E');
$list->push('F');
$list->removeAtPos(2);
// $list->shift();
$list->push('G');
$list->push('H');

$list->display();

// var_dump("search for F inx -> " . $list->search('F'));
// var_dump("search for L inx -> " . $list->search('L'));
exit;

final class Stack
{
    

    public function __construct(
        private LinkedListReal $list = new LinkedListReal(),
    ) {}

    public function push(int|string $val): Node
    {
        return $this->list->unshift($val);
    }

    public function pop(): Node|null
    {
        return $this->list->shift();
    }

    public function isEmpty(): bool
    {
        return $this->list->isEmpty();
    }
}

$stack = new Stack();
$stack->push('A');
$stack->push('B');
$stack->push('C');
$stack->push('D');
$stack->pop();
$stack->push('E');
$stack->push('F');

var_dump($stack);