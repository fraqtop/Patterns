<?php

namespace AbstractFactory;


class FerrariBody implements IBody
{
    function crash()
    {
        echo "ferrari body crashed", PHP_EOL;
    }

}