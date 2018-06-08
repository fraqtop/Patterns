<?php

namespace Decorator;


abstract class AbstractDecorator implements IRectangle
{
    protected $rectangle;

    abstract function afterDraw();

    function drawShape()
    {
        $this->rectangle->drawShape();
        $this->afterDraw();
    }

    function __construct(IRectangle $newComponent)
    {
        $this->rectangle = $newComponent;
    }
}