<?php


namespace AbstractFactory;


class PolarBear implements IAnimal
{
    public function walk(): void
    {
        echo 'Bear is over here', PHP_EOL;
    }

}