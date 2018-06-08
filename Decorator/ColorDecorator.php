<?php

namespace Decorator;


class ColorDecorator extends AbstractDecorator
{
    function afterDraw()
    {
        echo "...with the other color</br>";
    }
}