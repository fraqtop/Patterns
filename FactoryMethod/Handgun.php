<?php


namespace FactoryMethod;


class Handgun extends Weapon
{

    public function getTrigger(): ITrigger
    {
        return new Trigger();
    }

}