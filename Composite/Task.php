<?php

namespace Composite;


abstract class Task
{
    private $guid;
    abstract public function getPriority(): float;
    public function getComposite()
    {
        return null;
    }

    public function getId()
    {
        return $this->guid;
    }

    public function __construct()
    {
        $this->guid = uniqid();
    }
}