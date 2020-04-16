<?php


namespace State;

/**
 * Class AbstractState
 * @package State
 *
 * @property Fighter $fighter
 */
abstract class AbstractState
{
    protected $fighter;

    public function setFighter(Fighter $fighter)
    {
        $this->fighter = $fighter;
    }

    abstract public function act(): void ;
}