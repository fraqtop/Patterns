<?php

namespace State;


class DefensiveState implements  IState
{
    function action()
    {
        echo "fighter defends", PHP_EOL;
    }

}