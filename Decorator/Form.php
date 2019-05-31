<?php

namespace Decorator;


class Form implements IRectangle
{
    function drawShape()
    {
        echo "form was drawn", PHP_EOL;
    }
}