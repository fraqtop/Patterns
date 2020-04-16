<?php


namespace Composite;


class Goal extends CompositeTask
{
    public function getPriority(): float
    {
        return array_reduce($this->tasks, function ($a, Task $b){
           return $a + $b->getPriority();
        });
    }
}