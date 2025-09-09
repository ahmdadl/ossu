<?php

final class Stack
{
    private int $top = -1;
    private mixed $lastOut = null;
    private array $stack = [];

    public function push(mixed $value): int
    {
        $this->stack[] = $value;

        return ++$this->top;
    }

    public function pop(): mixed
    {
        if ($this->isEmpty()) return null;

        $this->lastOut = $this->stack[$this->top];

        unset($this->stack[$this->top]);

        $this->top--;
        
        return $this->lastOut;
    }

    public function getTop(): mixed
    {
        if ($this->isEmpty()) return null;

        return $this->stack[$this->top];
    }

    public function getLastOut(): mixed
    {
        return $this->lastOut;
    }

    public function isEmpty(): bool
    {
        return count($this->stack) <= 0;
    }

    public function getAll(): array
    {
        return $this->stack;
    }
}

$stack = new Stack;
var_dump($stack->isEmpty()); // true
$stack->push('A');
$stack->push('B');
$stack->push('C');
$stack->push('D');
var_dump($stack->getTop()); // D
var_dump($stack->getLastOut()); // null
$stack->pop(); // D
$stack->push('E');
$stack->push('F');
var_dump($stack->getLastOut()); // D
var_dump('----- All ---------');
print_r($stack->getAll());