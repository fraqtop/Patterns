<?php

namespace AbstractFactory;

abstract class AbstractCar
{
    protected $wheel;
    protected $body;
    abstract function rotateWheels();
    abstract function bump();
}