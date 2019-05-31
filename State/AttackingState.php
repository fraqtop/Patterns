<?php

namespace State;


class AttackingState implements IState
{
    function action()
    {
        echo "fighter is attacking", PHP_EOL;
    }

}