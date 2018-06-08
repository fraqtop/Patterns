<?php

namespace State;


class Context implements IState
{
    private $currentState;

    const STATE_1 = 1;
    const STATE_2 = 2;
    const STATE_3 = 3;

    public function setState($newState)
    {
        switch ($newState)
        {
            case self::STATE_1:
                $this->currentState = new AttackingState();
                break;
            case self::STATE_2:
                $this->currentState = new DefensiveState();
                break;
            case self::STATE_3:
                $this->currentState = new KnockoutState();
                break;
        }
    }

    function action()
    {
        $this->currentState->action();
    }

}