<?php


namespace FactoryMethod;


class Bow extends Weapon
{

    public function getTrigger(): ITrigger
    {
        return new Bowstring();
    }

}