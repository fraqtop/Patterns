<?php

namespace AbstractFactory;


class Jeep extends AbstractCar
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
        $this->wheel = new JeepWheel();
        $this->body = new JeepBody();
    }
}