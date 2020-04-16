<?php

namespace State;

/**
 * Class Fighter
 * @package State
 *
 * @property AbstractState $state
 */
class Fighter
{
    private $state;

    function __construct()
    {
        $this->setState(new WaitingState());
    }

    public function setState(AbstractState $state)
    {
        $this->state = $state;
        $this->state->setFighter($this);
    }

    function react()
    {
        $this->state->act();
    }

    public function punch()
    {
        echo 'trying to punch opponent', PHP_EOL;
    }

    public function stepForward()
    {
        echo 'made step forward', PHP_EOL;
    }

    public function stepBack()
    {
        echo 'made step back', PHP_EOL;
    }

}