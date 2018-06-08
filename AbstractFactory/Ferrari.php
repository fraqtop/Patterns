<?php

namespace AbstractFactory;


class Ferrari extends AbstractCar
{
    function bump()
    {
        $this->body->crash();
    }

    function rotateWheels()
    {
        $this->wheel->rotate();
    }

    function __construct()
    {
        $this->body = new FerrariBody();
        $this->wheel = new FerrariWheel();
    }

}