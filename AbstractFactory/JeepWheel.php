<?php

namespace AbstractFactory;


class JeepWheel implements IWheel
{
    function rotate()
    {
        echo "jeep wheel rotates", PHP_EOL;
    }
}