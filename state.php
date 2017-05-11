<?php

interface IState
{
    function action();
}

class Fighter
{
    private $context;
    function __construct()
    {
        $this->context = new Context();
    }

    function makeReaction($opponentAct)
    {
        switch ($opponentAct)
        {
            case "defend":
                $this->context->setState(1);
                break;
            case "attack":
                $this->context->setState(2);
                break;
            case "massive hook":
                $this->context->setState(3);
                break;
        }
        $this->context->action();
    }
}

class AttackingState implements IState
{
    function action()
    {
        echo "fighter is attacking</br>";
    }

}

class DefensiveState implements  IState
{
    function action()
    {
        echo "fighter defends</br>";
    }

}

class KnockoutState implements IState
{
    function action()
    {
        echo "fighter is on the ground</br>";
    }

}

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

$fighter = new Fighter();
$fighter->makeReaction("attack");
$fighter->makeReaction("defend");
$fighter->makeReaction("massive hook");