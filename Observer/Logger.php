<?php


namespace Observer;


class Logger extends SecurityManagerObserver
{
    protected function process()
    {
        echo 'data was written to log', PHP_EOL;
    }
}