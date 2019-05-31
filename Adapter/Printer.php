<?php

namespace Adapter;


class Printer
{
    function printString(string $str)
    {
        echo "$str  --- printed by printer", PHP_EOL;
    }
}