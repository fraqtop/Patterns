<?php

namespace State;


class AttackingState extends AbstractState
{
    public function act() : void
    {
        echo 'trying to kick opponent\'s ass', PHP_EOL;
        $this->fighter->stepForward();
        $this->fighter->punch();
        $this->fighter->setState(new DefensiveState());
    }

}