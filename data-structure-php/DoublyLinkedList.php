<?php

class Node 
{
    public function __construct(
        public readonly mixed $val,
        public ?self $prev = null,
        public ?self $next = null,
    ) {
        // 
    }
}

class DoublyLinkedList
{
    private ?Node $head = null;
    private ?Node $tail = null;

    private int $length = 0;

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function insertFirst(mixed $val)
    {
        $this->length++;

        if ($this->isEmpty()) {
            $this->head = $this->tail = new Node($val);
            
            return;
        }

       $node = new Node($val, next: $this->head);
       $this->head->prev = $node;
       $this->head = $node;
    }

    public function insertEnd(mixed $val)
    {
        $this->length++;

        if ($this->isEmpty()) {
            $this->head = $this->tail = new Node($val);
            
            return;
        }

        $node = new Node($val, prev: $this->tail);
        $this->tail->next = $node;
        $this->tail = $node;
    }

    public function displayStart()
    {
        $head = $this->head;
        $output = [];
        while($head !== null) {
            $output[] = $head->val;
            $head = $head->next;
        }

        var_dump("Start -> " . implode(",", $output));
    }

    public function displayEnd()
    {
        $tail = $this->tail;
        $output = [];
        while($tail !== null) {
            $output[] = $tail->val;
            $tail = $tail->prev;
        }

        var_dump("End -> " . implode(",", $output));
    }

    public function deleteStart()
    {
        $this->head = $this->head?->next;

        $this->head->prev = null;

        $this->length--;
    }

    public function deleteEnd()
    {
        $this->tail = $this->tail?->prev;

        $this->tail->next = null;

        $this->length--;
    }

    public function getLength(): int {
        return $this->length;
    }

    public function insertAtPos(int $pos, mixed $val)
    {
        if ($pos > $this->length) {
            throw new RangeException('pos is out of range');
        }

        $this->length++;

            $current = $this->head;
            $i = 0;
            while ($current->next) {
                if ($i === $pos) {
                    $prev = $current->prev;
                    $node = new Node($val, $current->prev, $current);
                    $current->prev = $node;
                    $prev->next = $node;
                }

                $current = $current->next;
                $i++;
            }
    }

    public function deleteAt(int $pos)
    {
        if ($pos < 0 || $pos > $this->length) {
            throw new RangeException('out of range');
        }

        if ($pos === 0) {
            $this->deleteStart();
            return;
        } 
        
        if ($pos === $this->length) {
            $this->deleteEnd();
            return;
        } 
        
        $current = $this->head;
        for ($i = 0; $i < $pos; $i++) {
            $current = $current->next;
        }

        $next = $current->next;
        $prev = $current->prev;
        $next->prev = $prev;
        $prev->next = $next;
    }
}

$list = new DoublyLinkedList();
$list->insertEnd('A');
$list->insertEnd('B');
$list->insertEnd('C');
$list->insertEnd('D');
$list->insertEnd('E');

$list->insertAtPos(2, 'G');
$list->insertAtPos(4, 'H');


// $list->deleteStart();
// $list->deleteEnd();

$list->deleteAt(4);

$list->displayStart();
$list->displayEnd();

// var_dump($list);