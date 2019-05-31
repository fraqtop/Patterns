<?php


namespace Composite;


class ImportantTask extends Task
{
    public function getPriority(): float
    {
        return 5;
    }

}