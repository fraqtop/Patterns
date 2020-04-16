<?php


namespace State;


class WaitingState extends AbstractState
{
    public function act(): void
    {
        echo 'waiting for opponent reaction', PHP_EOL;
        $this->fighter->stepBack();
        $this->fighter->stepForward();
        $this->fighter->setState(new AttackingState());
    }

}