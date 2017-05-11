<?php

interface IWheel
{
    function rotate();
}

interface IBody
{
    function crash();
}

abstract class AbstractCar
{
    protected $wheel;
    protected $body;
    abstract function rotateWheels();
    abstract function bump();
}

class JeepWheel implements IWheel
{
    function rotate()
    {
        echo "jeep wheel rotates</br>";
    }

}

class FerrariWheel implements IWheel
{
    function rotate()
    {
        echo "ferrari wheel rotates</br>";
    }

}

class JeepBody implements IBody
{
    function crash()
    {
        echo "jeep body crashed</br>";
    }
}

class FerrariBody implements IBody
{
    function crash()
    {
        echo "ferrari body crashed</br>";
    }

}

class Jeep extends AbstractCar
{
    function __construct()
    {
        $this->wheel = new JeepWheel();
        $this->body = new JeepBody();
    }
    function bump()
    {
        $this->body->crash();
    }

    function rotateWheels()
    {
        $this->wheel->rotate();
    }
}

class Ferrari extends AbstractCar
{
    function __construct()
    {
        $this->body = new FerrariBody();
        $this->wheel = new FerrariWheel();
    }

    function bump()
    {
        $this->body->crash();
    }

    function rotateWheels()
    {
        $this->wheel->rotate();
    }
}

$ferrari = new Ferrari();
$jeep = new Jeep();

$ferrari->bump();
$jeep->rotateWheels();