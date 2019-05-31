<?php

namespace Decorator;


class Window implements IRectangle
{
    function drawShape()
    {
        echo "window was drawn", PHP_EOL;
    }

}