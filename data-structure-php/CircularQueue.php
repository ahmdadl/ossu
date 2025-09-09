<?php

class CircularQueue
{
    private int $front = 0;
    private int $rear;
    private array $queue;
    private int $count = 0;

    public function __construct(private int $maxSize = 5)
    {
        $this->queue = array_fill(0, $maxSize, null);
        $this->rear = $maxSize - 1;
    }

    public function enqueue(int $val)
    {
        if ($this->isFull()) {
            var_dump('queue is full');
            return;
        }

        $this->rear = ($this->rear + 1) % $this->maxSize;

        $this->queue[$this->rear] = $val;

        $this->count++;
    }

    public function dequeue(): ?int
    {   
        if ($this->isEmpty()) {
            var_dump('queue is empty');
            return null;
        }

        $val = $this->queue[$this->front];

        
        $this->queue[$this->front] = null;
        
        $newFront = $this->front + 1;
        
        $this->count--;

        $this->front = $newFront % $this->maxSize;

        return $val;
    }

    public function isFull(): bool
    {
        return $this->count === $this->maxSize;
    }

    public function isEmpty(): bool
    {
        return $this->count === 0;
    }

    public function display()
    {
        print_r($this->queue);
    }

    public function getFront(): int
    {
        return $this->front;
    }

    public function getRear(): int
    {
        return $this->rear;
    }

    public function getFrontValue(): ?int
    {
        return $this->queue[$this->front] ?? null;
    }

    public function getRearValue(): ?int
    {
        return $this->queue[$this->rear] ?? null;
    }
}

$queue = new CircularQueue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
// $queue->dequeue();
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);
$queue->dequeue();
$queue->enqueue(8);
$queue->enqueue(9);

var_dump(
    'Front:' . $queue->getFront() . " - Val: " . $queue->getFrontValue(),
    'Rear: ' . $queue->getRear() . " - Val: " . $queue->getRearValue()
);
$queue->display();