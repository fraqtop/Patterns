<?php


namespace FactoryMethod;


class Bowstring implements ITrigger
{

    public function fire(): string
    {
        return 'releasing the bowstring';
    }

}