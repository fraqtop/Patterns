<?php

namespace Facade;


class Car
{
    private $wheel;
    private $engine;
    private $driver;

    public function drive()
    {
        $this->driver->sit();
        $this->engine->start();
        $this->wheel->rotate();
    }

    public function __construct()
    {
        $this->driver = new Driver();
        $this->engine = new Engine();
        $this->wheel = new Wheel();
    }
}