<?php

class Wheel
{
    public function rotate()
    {
        echo "the wheel was rotated</br>";
    }
}


class Engine
{
    public function start()
    {
        echo "the engine was started</br>";
    }
}

class Driver
{
    public function sit()
    {
        echo "the driver is in car</br>";
    }
}

class Car
{
    private $wheel;
    private $engine;
    private $driver;
    public function __construct()
    {
        $this->driver = new Driver();
        $this->engine = new Engine();
        $this->wheel = new Wheel();
    }
    public function drive()
    {
        $this->driver->sit();
        $this->engine->start();
        $this->wheel->rotate();
    }
}

$car = new Car();
$car->drive();