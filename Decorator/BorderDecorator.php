<?php

namespace Decorator;


class BorderDecorator extends AbstractDecorator
{
    function afterDraw()
    {
        echo "...with border", PHP_EOL;
    }
}