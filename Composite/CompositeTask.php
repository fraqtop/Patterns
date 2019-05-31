<?php


namespace Composite;


abstract class CompositeTask extends Task
{
    protected $tasks;

    public function addTask (Task $task)
    {
        $this->tasks[$task->getId()] = $task;
    }

    public function removeTask(Task $task)
    {
        unset($this->tasks[$task->getId()]);
    }

    public function getComposite()
    {
        return $this;
    }
}