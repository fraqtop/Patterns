<?php

namespace State;


class DefensiveState extends AbstractState
{
    public function act() : void
    {
        $this->fighter->stepBack();
        echo 'fighter is in defence', PHP_EOL;
        $this->fighter->setState(new WaitingState());
    }

}