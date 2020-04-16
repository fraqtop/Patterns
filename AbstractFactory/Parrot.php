<?php


namespace AbstractFactory;


class Parrot implements IBird
{
    public function fly(): void
    {
        echo 'parrot won\'t fly he just want to talk', PHP_EOL;
    }

}