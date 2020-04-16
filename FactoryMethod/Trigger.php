<?php


namespace FactoryMethod;


class Trigger implements ITrigger
{

    public function fire(): string
    {
        return 'pulling the trigger';
    }

}