<?php


namespace AbstractFactory;


class Owl implements IBird
{
    public function fly(): void
    {
        echo 'owl is flying', PHP_EOL;
    }

}