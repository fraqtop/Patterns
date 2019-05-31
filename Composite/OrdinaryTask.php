<?php


namespace Composite;


class OrdinaryTask extends Task
{
    public function getPriority(): float
    {
        return 2;
    }
}