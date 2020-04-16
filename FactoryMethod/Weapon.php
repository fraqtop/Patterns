<?php


namespace FactoryMethod;


abstract class Weapon
{
    abstract public function getTrigger(): ITrigger;

    public function shot()
    {
        $trigger = $this->getTrigger();
        $triggerLog = $trigger->fire();
        return "$triggerLog. Looks someone is dead".PHP_EOL;
    }


}