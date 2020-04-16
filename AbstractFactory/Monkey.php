<?php


namespace AbstractFactory;


class Monkey implements IAnimal
{
    public function walk(): void
    {
        echo 'monkey is on the walk', PHP_EOL;
    }

}