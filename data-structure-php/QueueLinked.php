<?php

class Node {
    public function __construct(public readonly mixed $val, public ?self $next = null)
    {
        // 
    }
}

class QueuedLinked
{
    private ?Node $head = null;
    private ?Node $tail = null;
    private int $length = 0;

    public function isEmpty():bool
    {
        return $this->head === null;
    }

    public function enqueue(mixed $val): void
    {
        if ($this->isEmpty()) {
            $this->head = $this->tail = new Node($val);
        } else {
            $this->tail->next = new Node($val);
            $this->tail = $this->tail->next;
        }

        $this->length++;
    }

    public function dequeue(): mixed
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('queue is empty');
        }

        $head = $this->head;
        $this->head = $head->next;

        $this->length--;

        return $head->val;
    }

    public function display()
    {
        $head = $this->head;
        $output = [];
        while($head) {
            $output[] = $head->val;
            $head = $head->next;
        }

        var_dump(implode(",", $output), 'SIZE: ' . $this->size());
    }

    public function size(): int
    {
        return $this->length;
    }
}

$queue = new QueuedLinked();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->dequeue();
$queue->enqueue('D');
$queue->display();
// var_dump($queue);
