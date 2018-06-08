<?php

namespace State;


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