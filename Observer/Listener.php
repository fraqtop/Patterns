<?php

namespace Observer;


class Listener implements IListener
{
    function react($string)
    {
        echo "listener read: $string </br>";
    }
}