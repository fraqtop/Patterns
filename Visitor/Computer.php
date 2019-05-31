<?php


namespace Visitor;


class Computer
{
    private $components;

    public function accept(Visitor $visitor)
    {
        foreach ($this->components as $component) {
            $shortClassName = (new \ReflectionClass($component))->getShortName();
            $method = "visit$shortClassName";
            $visitor->$method($component);
        }
    }

    public function __construct()
    {
        $this->components[] = new Processor();
        $this->components[] = new VideoCard();
        $this->components[] = new RAM();
    }
}